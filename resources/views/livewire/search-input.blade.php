<div wire:keydown.escape="$set('modal',false)"> 
    <button id="nav-search-button" wire:click="$set('modal',true)">
        <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
    </button>
    
    @if ($modal)
        <div id="nav-search" wire:click.self="$set('modal',false)" class="fixed top-0 bottom-0 left-0 right-0 z-40 bg-black/50" >
        
            {{-- close button  --}}
            <div id="nav-search-close" wire:click="$set('modal',false)" class="absolute top-11 right-8 p-3 rounded-full text-white bg-gray-700/30 hover:cursor-pointer hover:bg-gray-700 transition duration-300 z-50">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </div>
        
            <div class="absolute top-8 w-full">
                
                <div class="w-1/2 mx-auto flex flex-col justify-center items-center gap-4">
                    <form class="flex items-center w-full">   
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute text-gray-500 inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
            
                            </div>
                            <input type="text" wire:model.trim="search" id="simple-search" class="h-16 placeholder:text-xl  text-xl bg-gray-50 border-0 font-roboto font-light border-gray-300 text-gray-900 rounded-md focus:ring-0 focus:border-gray-300 block w-full pl-14 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Search by product name">
                        </div>
                    </form>
        
                    @if ($search)    
                        <div class="p-8 bg-white w-full rounded-md">
                            <div class="grid grid-cols-5">
                                @forelse ($products as  $product)
                                <div class="flex flex-col gap-3 p-3 max-h-52 rounded-md hover:scale-110 hover:shadow-md transition duration-500">
                                    <div class="overflow-hidden flex justify-center">
                                        <img src="{{asset('/storage/'.$product->productImages[0]->image)}}" alt=""  class="object-contain">
                                    </div>
        
                                    <div class="space-y-1">
                                        <p class="font-roboto uppercase text-xs tracking-wide font-light text-gray-700 truncate">{{ $product->name }}</p>
                                        <p class="font-roboto uppercase text-xs tracking-wide font-light text-gray-700">LE {{ number_format($product->price,2,'.','') }}</p>
                                    </div>
                                </div>

                                @empty
                                <div class="text-center col-span-5">
                                    <span class="text-gray-500 text-sm">No Products Available :(</span>
                                </div>
                                @endforelse

                                @for($i = 0 ; $i < 5 ; $i++)
                                <div role="status" class="animate-pulse mt-10 pl-4" wire:loading>
                                    <div class="h-2.5 bg-gray-400 rounded-full dark:bg-gray-700 max-w-[640px] mb-2.5 mx-auto"></div>
                                    <div class="h-2.5 mx-auto bg-gray-400 rounded-full dark:bg-gray-700 max-w-[540px]"></div>
                                    <div class="flex items-center justify-center mt-4">
                                        <svg class="w-10 h-10 mr-2 text-gray-400 dark:text-gray-700" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                                        <div class="w-20 h-2.5 bg-gray-400 rounded-full dark:bg-gray-700 mr-3"></div>
                                        <div class="w-24 h-2 bg-gray-400 rounded-full dark:bg-gray-700"></div>
                                    </div>
                                    <span class="sr-only">Loading...</span>
                                </div>
                                @endfor
                            </div>
        
                            @if ($products->count())
                                <div class="text-center pt-8">
                                    <a href="{{ route('products.index') }}">
                                        <span class="text-gray-500 text-sm hover:text-gray-600 underline ">See more products</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
        
                
            </div>
        </div>

        
        
        @endif
</div>
