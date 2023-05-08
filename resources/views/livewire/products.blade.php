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
        <div class="basis-52 overflow-y-auto min-w-[17rem] max-h-screen pr-4 pb-6 sticky-side-bar sticky top-0 md:inline-block hidden"
            wire:ignore.slef>
            <div class="flex flex-col justify-center space-y-6 ">
                <!-- price  -->
                <div class="space-y-4 ">
                    <button id="price" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-sm text-gray-500">Price</span>
                        <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                    </button>

                    <div data-filter-name="price" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex items-center pb-3">
                            <input type="number" wire:model.lazy.trim="minPrice"
                                wire:change.debounce.200ms="updateSearchInput" wire:keyup="updateSearchInput"
                                id="phone"
                                class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-500 text-lg rounded-sm block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                                placeholder="LE: " min="0" autocomplete="off">
                            <span class="text-gray-500 text-2xl px-2">-</span>
                            <input type="number" wire:model.lazy.trim="maxPrice"
                                wire:change.debounce.200ms="updateSearchInput" wire:keyup="updateSearchInput"
                                id="phone"
                                class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-500 text-lg rounded-sm block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                                placeholder="LE: " min="0" autocomplete="off">
                        </div>
                    </div>
                </div>

                <hr class="!mt-0">


                @foreach ($options as $name => $optionValues)
                    <!-- {{ $name }}  -->
                    <div class="space-y-2 ">
                        <button id="{{ $name }}" class="filter flex items-center justify-between w-full">
                            <span class="font-extralight text-sm text-gray-500 capitalize">{{ $name }}</span>
                            <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                        </button>

                        <div data-filter-name="{{ $name }}"
                            class="max-h-0 overflow-hidden transition-all duration-700">
                            <div class="flex flex-col pb-4 ">

                                @foreach ($optionValues as $key => $optionValue)
                                    <div class="flex items-center  rounded">
                                        <input wire:model.trim='filterValues. {{ $name . $key }}'
                                            wire:click="updateSearchInput" value="{{ $optionValue }}"
                                            id="bordered-checkbox-{{ $name . $key }}" type="checkbox"
                                            class="w-5 h-5 text-gray-400 bg-gray-200 rounded-full border-0 focus:ring-0 ">
                                        <label for="bordered-checkbox-{{ $name . $key }}"
                                            class="py-1 ml-2 w-full text-sm uppercase tracking-wide text-gray-500 ">{{ $optionValue }}</label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <hr class="!mt-0">
                @endforeach


                <!-- sort by -->
                <div class="space-y-2 ">
                    <button id="sort" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-sm text-gray-500">Sort by</span>
                        <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                    </button>

                    <div data-filter-name="sort" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-col pb-4">

                            <div class="flex items-center mb-2">
                                <input id="default-radio-1" type="radio" wire:model.trim="sortByValue" value="latest"
                                    wire:click="sortBy"
                                    class="w-5 h-5 text-gray-400 bg-gray-100 rounded-full border-0 focus:ring-0">
                                <label for="default-radio-1"
                                    class="py-1 ml-2 w-full text-sm capitalize tracking-wide text-gray-500">latest
                                    arrival</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="default-radio-2" type="radio" wire:model.trim="sortByValue"
                                    value="priceLowToHigh" wire:click="sortBy"
                                    class="w-5 h-5 text-gray-400 bg-gray-100 rounded-full border-0 focus:ring-0">
                                <label for="default-radio-2"
                                    class="py-1 ml-2 w-full text-sm capitalize tracking-wide text-gray-500">Price, Low
                                    to High</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="default-radio-3" type="radio" wire:model.trim="sortByValue"
                                    value="priceHighToLow" wire:click="sortBy"
                                    class="w-5 h-5 text-gray-400 bg-gray-100 rounded-full border-0 focus:ring-0">
                                <label for="default-radio-3"
                                    class="py-1 ml-2 w-full text-sm capitalize tracking-wide text-gray-500">Price, high
                                    to Low</label>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>

        {{-- products section  --}}
        <div class="md:ml-5 flex-grow relative overflow-hidden">
            {{-- filter above products --}}
            <div class="md:hidden block">

                <div>
                    <div class="flex justify-between items-start pb-4">
                        <button wire:click="$toggle('aboveFilterToggle')"
                            class="flex items-center gap-2 border border-gray-300 text-gray-900 text-sm rounded-sm py-2.5 px-3">
                            <span class="font-medium">Filter</span>
                            <x-svgs.expand-filter class="w-4 h-4" />
                        </button>

                        <div class="w-48">
                            <select id="sort" wire:model.trim="sortByValue" wire:change="sortBy"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-0 focus:border-gray-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="latest">LATEST</option>
                                <option value="priceLowToHigh">Price Low To High</option>
                                <option value="priceHighToLow">Price High To Low</option>
                            </select>
                        </div>
                    </div>

                    @if ($aboveFilterToggle)
                        <div class="max-h-auto overflow-hidden transition-all duration-700">
                            <div class="flex flex-wrap justify-start max-h-80 gap-6 py-4">

                                {{-- price  --}}
                                <div class="flex flex-col justify-start items-center gap-y-4">
                                    <span class="font-extralight text-base text-gray-500 w-full">Price</span>
                                    <div class="flex pb-3">
                                        <input type="number" id="phone" wire:model.lazy.trim="minPrice"
                                            wire:change="updateSearchInput"
                                            class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                                            placeholder="LE: " min="0" max="10000" autocomplete="off"
                                            required>
                                        <span class="text-gray-500 text-2xl px-2">-</span>
                                        <input type="number" id="phone" wire:model.lazy.trim="maxPrice"
                                            wire:change="updateSearchInput"
                                            class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                                            placeholder="LE: " min="0" max="10000" autocomplete="off"
                                            required>
                                    </div>
                                </div>

                                {{-- options  --}}
                                <div class="flex flex-wrap justify-start items-start gap-y-4 gap-x-12">

                                    @foreach ($options as $name => $optionValues)
                                        <div class="space-y-2 ">
                                            <span
                                                class="font-extralight text-base text-gray-500">{{ $name }}</span>

                                            <div class="flex flex-col">
                                                <div class="flex flex-col pb-4 ">

                                                    @foreach ($optionValues as $key => $optionValue)
                                                        <div class="flex items-center  rounded">
                                                            <input wire:model.trim='filterValues. {{ $name . $key }}'
                                                                wire:click="updateSearchInput"
                                                                value="{{ $optionValue }}"
                                                                id="bordered-checkbox-{{ $name . $key }}"
                                                                type="checkbox"
                                                                class="w-5 h-5 text-gray-400 bg-gray-200 rounded-full border-0 focus:ring-0 ">
                                                            <label for="bordered-checkbox-{{ $name . $key }}"
                                                                class="py-1 ml-2 w-full text-sm uppercase tracking-wide text-gray-500 ">{{ $optionValue }}</label>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                        </div>
                    @endif
                </div>

            </div>

            {{-- products  --}}
            <div class="flex flex-wrap gap-y-8">
                @forelse ($products as $key => $product)
                    <div class="wow fadeInUp xl:basis-1/3 basis-1/2 md:pl-4 p-2 md:p-0"
                        data-wow-delay="{{ ($key + 3) / 10 . 's' }}">
                        <div class="image-wrapper relative ">
                            <div class="inner-image-wrapper relative">
                                <a href="{{ route('products.show', $product) }}"
                                    class="block relative overflow-hidden">
                                    @if ($product->productImages && $product->productImages->count() > 1)
                                        <div class="relative pt-[150%]">
                                            <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-all duration-700 hover:scale-105"
                                                src="{{ asset('/storage/' . $product->productImages[0]->image) }}" />
                                            <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-all duration-700 opacity-0 hover:opacity-100 hover:scale-105"
                                                src="{{ asset('/storage/' . $product->productImages[1]->image) }}" />
                                        </div>
                                    @elseif($product->productImages && $product->productImages->count() === 1)
                                        <div class="relative pt-[150%]">
                                            <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-all duration-700 hover:scale-105"
                                                src="{{ asset('/storage/' . $product->productImages[0]->image) }}" />
                                        </div>
                                    @endif
                                </a>
                                @if ($product->productSkus->sum('quantity') <= 0)
                                    <span
                                        class="absolute top-4 left-4 uppercase py-1 px-3.5 font-roboto bg-gray-400 text-white text-sm">Sold
                                        Out</span>
                                @elseif($product->is_hot == 'Hot')
                                    <span
                                        class="absolute top-4 left-4 uppercase py-1 px-3.5 font-roboto bg-red-400 text-white text-sm">HOT</span>
                                @endif
                                <span
                                    class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50"
                                    data-tooltip-target="tooltip-left-{{ $product->id }}"
                                    data-tooltip-placement="left">
                                    <button wire:click="$set('productQV', {{ $product->id }})" type="button">
                                        <x-svgs.expand class="w-6 h-6 inline-block" />
                                    </button>
                                    <div id="tooltip-left-{{ $product->id }}" role="tooltip"
                                        class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                            </div>
                            <div class="space-y-3 my-4 ">
                                <p class="font-roboto uppercase text-base font-light text-gray-700">
                                    {{ $product->name }}</p>
                                @foreach ($product->options as $option)
                                    @foreach ($option->optionValues as $value)
                                        {{ $value->name }}
                                    @endforeach
                                @endforeach
                                <p class="font-roboto uppercase text-base font-light text-gray-700">LE
                                    <span @class(['line-through text-sm' => $product->sale != null])>
                                        {{ number_format($product->productSkus->first()->price, 2, '.', '') }}
                                    </span>
                                    @if ($product->sale != null)
                                        <span>
                                            -
                                            {{ number_format($product->sale->first()->discounted_price, 2, '.', '') }}
                                        </span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>


                @empty
                    <div class="p-4 mb-4 text-sm rounded-lg flex flex-col space-y-4 mx-auto ">
                        <x-svgs.out-of-stock class="w-60 h-auto inline-block" />
                        <span class="font-roboto text-lg text-center">No Products Available :(</span>
                    </div>
                @endforelse
                @if ($productQV)
                    <livewire:product-quick-view :productId="$productQV" />
                @endif

                @push('scripts')
                    @vite(['resources/js/products/jquery.js', 'resources/js/products/shop.js'])
                @endpush

            </div>


            {{-- placeholder --}}
            <div class="grid grid-cols-3 space-x-4 space-y-6 justify-center">
                @for ($i = 0; $i <= 3; $i++)
                    <div role="status"
                        class="max-w-sm p-4 border border-gray-200 rounded shadow animate-pulse md:p-6 dark:border-gray-700"
                        wire:loading>
                        <div class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded dark:bg-gray-700">
                            <svg class="w-12 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                                <path
                                    d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z" />
                            </svg>
                        </div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                        <div class="flex items-center mt-4 space-x-3">
                            <svg class="text-gray-200 w-14 h-14 dark:text-gray-700" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32 mb-2"></div>
                                <div class="w-48 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                            </div>
                        </div>
                        <span class="sr-only">Loading...</span>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
