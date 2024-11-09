<div class="container mx-auto pb-8 px-4">
    @if (session('error'))
        <div class="fixed top-10 left-1/2 -translate-x-1/2 z-50 flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
            role="alert" wire:poll>
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session('error') }}.
            </div>
        </div>
    @endif

    <header class="py-24">
        <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">shpping cart</h1>
        <span class="text-gray-500 font-medium text-lg">You have {{ $this->cartItems->count() }} items in your
            cart.</span>
    </header>

    @if ($this->cartItems->count())
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
                            @foreach ($this->cartItems as $index => $item)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4 w-32">
                                        <img src="{{ asset('/storage/' . $item->product->productImages[0]->image) }}"
                                            alt="Apple Watch">
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                        {{ $item->product->name }} -
                                        @foreach ($item->productSku->productSkuValues as $skuValue)
                                            <span>
                                                {{ $skuValue->optionValue->name }}
                                            </span>

                                            @if ($loop->remaining > 0)
                                                \
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                        $@if ($item->product->sale != null)
                                            <span>
                                                {{ number_format($item->product->sale->discounted_price, 2, '.', '') }}
                                            </span>
                                        @else
                                            <span>
                                                {{ number_format($item->productSku->price, 2, '.', '') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <button wire:click="decrementQnt({{ $item->id }})"
                                                wire:loading.attr="disabled" @disabled(!$this->canDecrement($item->id))
                                                class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                                type="button">
                                                <span class="sr-only">Quantity button</span>
                                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                            <div>
                                                <input type="text" wire:model="quantity.{{ $item->id }}" disabled
                                                    id="first_product"
                                                    class="w-14 text-center border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="1">
                                            </div>
                                            <button wire:click="incrementQnt({{ $item->id }})"
                                                wire:loading.attr="disabled" @disabled(!$this->canIncrement($item->id))
                                                data-popover-target="popover-top-{{ $item->id }}"
                                                data-popover-placement="top"
                                                class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                                type="button">
                                                <span class="sr-only">Quantity button</span>
                                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>

                                            @if (!$this->canIncrement($item->id))
                                                <div data-popover id="popover-top-{{ $item->id }}" role="tooltip"
                                                    class="absolute z-10 invisible inline-block w-fit text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                    <div class="px-3 py-2 ">
                                                        <p>That's all we have yet</p>
                                                    </div>
                                                    <div data-popper-arrow></div>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <a href="#" wire:click="removeItem({{ $item->id }})"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>


            <div class="lg:basis-2/5 basis-full">
                <div class="lg:max-w-sm lg:mx-auto w-full shadow-lg rounded-lg">
                    <livewire:order-summary :cart="$cartItems" wire:key="order-summary-{{ time() }}" />
                </div>
            </div>
        </div>
    @else
        <div class="empty-cart flex justify-center items-center flex-col space-y-4">
            <x-svgs.empty-cart class="w-40 h-40" />
            <span class="font-medium text-lg text-gray-500">Your cart is currently empty.</span>
            <a href="{{ route('products.index') }}" class="underline text-gray-600">Continue shopping</a>
        </div>
    @endif
</div>
