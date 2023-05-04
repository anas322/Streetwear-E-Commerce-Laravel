<div class="container mx-auto pb-8 px-4">

    <header class="py-24">
        <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">shpping cart</h1>
        <span class="text-gray-500 font-medium text-lg">You have {{ $this->cartItems->count() }} items in your cart.</span>
    </header>

    @if($this->cartItems->count())
    <div class="flex lg:flex-row flex-col justify-center gap-4 mb-8">
        
        <div class="lg:basis-3/5 basis-full">
            
            
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Product
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Quantity
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($this->cartItems as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-32">
                                    <img src="{{asset('/storage/'.$item->product->productImages[0]->image)}}" alt="Apple Watch">
                                </td>
                                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                    {{ $item->product->name }}
                                </td>
                                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                    ${{$item->productSku->price}}
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-3">
                                        <button  wire:click="decrementQnt({{ $item->id }})" wire:loading.attr="disabled" class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <div>
                                            <input type="text" value="{{ $item->quantity }}" disabled id="first_product" class="w-14 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required>
                                        </div>
                                        <button wire:click="incrementQnt({{ $item->id }})" wire:loading.attr="disabled" class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#" wire:click="removeItem({{$item->id}})" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


        </div>
        
        
        <div class="lg:basis-2/5 basis-full">
            <div class="lg:max-w-sm lg:mx-auto w-full shadow-lg rounded-lg">
                <livewire:order-summary  :cart="$cartItems" wire:key="order-summary-{{ time() }}" />
            </div>
        </div>
    </div>
    @else
    <div class="empty-cart flex justify-center items-center flex-col space-y-4">
               <x-svgs.empty-cart class="w-40 h-40" />
               <span class="font-medium text-lg text-gray-500">Your cart is currently empty.</span>
               <a href="#" class="underline text-gray-600">Continue shopping</a>
            </div>
            @endif
</div>

