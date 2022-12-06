<div>
    {{-- background header  --}}
    <x-slot name="header">
        <div class="overflow-hidden h-64 sm:h-[50vh] pt-12">
            <img src="{{ asset('storage/products/header.jpeg') }}" class="object-cover h-full w-full"
                style="object-position: 13% 36%" alt="streetwearts prducts header background">
        </div>
    </x-slot>
    
    <div class="flex items-start pt-28 px-10 relative">
       <!-- left filter products -->
       <div class="basis-72 sticky-side-bar sticky top-0 md:inline-block hidden">
           {{-- <livewire:left-filter-products /> --}}
           <div class="flex flex-col justify-center space-y-6 " wire:ignore>
                <!-- price  -->
                <div class="space-y-4 ">
                    <button id="price" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-base text-gray-500">Price</span>
                        <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                    </button>
                    
                    <div data-filter-name="price" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex items-center pb-3">
                                <input type="number" wire:model="minPrice" wire:keyup.debounce.200ms="updateSearchInput" id="phone" class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" autocomplete="off">
                            <span class="text-gray-500 text-2xl px-2">-</span>
                                <input type="number" wire:model="maxPrice" wire:keyup.debounce.200ms="updateSearchInput" id="phone" class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" autocomplete="off">
                        </div>
                    </div>
                </div>

                <hr class="!mt-0">

                <!-- size  -->
                <div class="space-y-4 ">
                    <button id="size" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-base text-gray-500">Size</span>
                        <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                    </button>
                    
                    <div data-filter-name="size" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-row gap-3 flex-wrap">
                            
                            @for ($i = 0; $i < 10; $i++)
                                <div class="flex items-center pl-4 rounded">
                                <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 text-gray-300 bg-gray-100 rounded-full border-0 focus:ring-0 ">
                                    <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 ">M</label>
                                </div>
                            @endfor
                        
                        </div>
                    </div>
                </div>
                <hr class="!mt-0">
                    
                
                <!-- color  -->
                <div class="space-y-4 ">
                    <button id="color" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-base text-gray-500">Color</span>
                        <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                    </button>
                    
                    <div data-filter-name="color" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-row gap-3 flex-wrap">

                            @for ($i = 0; $i < 6; $i++)
                                <div class="flex items-center mr-4 pl-4 py-1">
                                    <input id="red-radio" type="radio"  name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-0 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="red-radio" class="py-2 ml-2 w-full text-xs text-gray-500">Red</label>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
                <hr class="!mt-0">
                    
                <!-- sort by -->
                <div class="space-y-4 ">
                    <button id="sort" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-base text-gray-500">Sort by</span>
                        <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                    </button>
                    
                    <div data-filter-name="sort" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-col">

                            @for ($i = 0; $i < 6; $i++)
                                <div class="flex items-center mb-2 pl-2">
                                    <input id="default-radio-1" type="radio" name="default-radio" class="text-gray-300 bg-gray-100 rounded-full border-0 focus:ring-0">
                                    <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-600 dark:text-gray-600">Price, high to low</label>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
                    
                
                
            </div>
        </div>
        
        {{-- products section  --}}
        <div class="md:ml-10 flex-grow relative overflow-hidden">
            {{-- filter above products--}}
          <livewire:above-filter-products />

            {{-- products  --}}
            {{-- <livewire:product-view :products="$products"/> --}}
            <div class="flex flex-wrap gap-y-8" >
                @forelse ($products as $product)
                <div class="wow fadeInUp xl:basis-1/3 basis-1/2 md:pl-4 p-2 md:p-0">
                    <div class="image-wrapper relative ">
                        <div class="inner-image-wrapper relative">
                            <a href="#" class="block relative overflow-hidden">
                                <div class="relative pt-[150%]">
                                    <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-all duration-700"
                                        src="{{asset('/storage/'.$product->productImages[0]->image)}}" />
                                    <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-opacity duration-700 opacity-0 hover:opacity-100"
                                        src="{{asset('/storage/'.$product->productImages[1]->image)}}" />
                                </div>
                            </a>
                            <span
                                class="absolute top-4 left-4 uppercase py-1 px-3.5 font-roboto bg-red-400 text-white text-sm">HOT</span>
                            <span
                                class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50"
                                data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                <button wire:click="$set('productQV', {{$product->id}})" type="button"
                                    data-modal-toggle="defaultModal-{{ $product->id }}">
                                    <x-svgs.expand class="w-6 h-6 inline-block" />
                                </button>
                                <div id="tooltip-left" role="tooltip"
                                    class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    quick view
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">{{ $product->name }}</p>
                            <p class="font-semibold">LE {{ number_format($product->price,2,'.','') }}</p>
                        </div>
                    </div>
                </div>

                
                @empty
                <p class="font-roboto text-xl text-center">No Products Available :(</p>
                @endforelse
                
                @if ($productQV)
                    <livewire:product-quick-view :productId="$productQV" />
                @endif

                @push('scripts')
                    @vite(['resources/js/products/jquery.js','resources/js/products/shop.js'])
                @endpush
                
            </div>
            
        </div>
    </div>
</div>
