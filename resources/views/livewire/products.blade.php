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
       <div class="basis-52 sticky-side-bar sticky top-0 md:inline-block hidden">
           <div class="flex flex-col justify-center space-y-6 " wire:ignore>
                <!-- price  -->
                <div class="space-y-4 ">
                    <button id="price" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-sm text-gray-500">Price</span>
                        <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
                    </button>
                    
                    <div data-filter-name="price" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex items-center pb-3">
                                <input type="number" wire:model="minPrice" wire:change.debounce.200ms="updateSearchInput"
                                wire:keyup="updateSearchInput" id="phone" class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-500 text-lg rounded-sm block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" autocomplete="off">
                            <span class="text-gray-500 text-2xl px-2">-</span>
                                <input type="number" wire:model="maxPrice" wire:change.debounce.200ms="updateSearchInput"
                                wire:keyup="updateSearchInput" id="phone" class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-500 text-lg rounded-sm block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" autocomplete="off">
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
                        
                        <div data-filter-name="{{ $name }}" class="max-h-0 overflow-hidden transition-all duration-700">
                            <div class="flex flex-col pb-4 ">
                                
                                @foreach ($optionValues as $key => $optionValue)
                                    <div class="flex items-center  rounded">
                                    <input wire:model='filterValues. {{ $name . $key }}' wire:click="updateSearchInput" value="{{$optionValue}}" id="bordered-checkbox-{{ $name . $key }}" type="checkbox" class="w-5 h-5 text-gray-400 bg-gray-200 rounded-full border-0 focus:ring-0 ">
                                        <label for="bordered-checkbox-{{ $name . $key }}" class="py-1 ml-2 w-full text-sm uppercase tracking-wide text-gray-500 ">{{ $optionValue }}</label>
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
                                    <input id="default-radio-1" type="radio" wire:model="sortByValue" value="latest" wire:click="sortBy" class="w-5 h-5 text-gray-400 bg-gray-100 rounded-full border-0 focus:ring-0">
                                    <label for="default-radio-1" class="py-1 ml-2 w-full text-sm capitalize tracking-wide text-gray-500">latest arrival</label>
                                </div>

                                <div class="flex items-center mb-2">
                                    <input id="default-radio-2" type="radio" wire:model="sortByValue" value="priceLowToHigh" wire:click="sortBy" class="w-5 h-5 text-gray-400 bg-gray-100 rounded-full border-0 focus:ring-0">
                                    <label for="default-radio-2" class="py-1 ml-2 w-full text-sm capitalize tracking-wide text-gray-500">Price, Low to High</label>
                                </div>

                                <div class="flex items-center mb-2">
                                    <input id="default-radio-3" type="radio" wire:model="sortByValue" value="priceHighToLow" wire:click="sortBy" class="w-5 h-5 text-gray-400 bg-gray-100 rounded-full border-0 focus:ring-0">
                                    <label for="default-radio-3" class="py-1 ml-2 w-full text-sm capitalize tracking-wide text-gray-500">Price, high to Low</label>
                                </div>

                        </div>
                    </div>
                </div>
                    
                
                
            </div>
        </div>
        
        {{-- products section  --}}
        <div class="md:ml-5 flex-grow relative overflow-hidden">
            {{-- filter above products--}}
          <livewire:above-filter-products />

            {{-- products  --}}
            <div class="flex flex-wrap gap-y-8" >
                @forelse ($products as $key => $product)
                <div class="wow fadeInUp xl:basis-1/3 basis-1/2 md:pl-4 p-2 md:p-0" data-wow-delay="{{ ($key + 3 ) / 10 . 's'}}">
                    <div class="image-wrapper relative ">
                        <div class="inner-image-wrapper relative">
                            <a href="#" class="block relative overflow-hidden">
                                @if($product->productImages && $product->productImages->count() > 1)
                                <div class="relative pt-[150%]">
                                    <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-all duration-700 hover:scale-105"
                                        src="{{asset('/storage/'.$product->productImages[0]->image)}}" />
                                    <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-all duration-700 opacity-0 hover:opacity-100 hover:scale-105"
                                        src="{{asset('/storage/'.$product->productImages[1]->image)}}" />
                                </div>
                                @elseif($product->productImages && $product->productImages->count() === 1)
                                <div class="relative pt-[150%]">
                                    <img class="inline-block object-cover object-center absolute top-0 left-0 h-full w-full transition-all duration-700 hover:scale-105"
                                        src="{{asset('/storage/'.$product->productImages[0]->image)}}" />
                                </div>
                                @endif
                            </a>
                            <span
                                class="absolute top-4 left-4 uppercase py-1 px-3.5 font-roboto bg-red-400 text-white text-sm">HOT</span>
                            <span
                                class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50"
                                data-tooltip-target="tooltip-left-{{$product->id}}" data-tooltip-placement="left">
                                <button wire:click="$set('productQV', {{$product->id}})" type="button"
                                    data-modal-toggle="defaultModal-{{ $product->id }}">
                                    <x-svgs.expand class="w-6 h-6 inline-block" />
                                </button>
                                <div id="tooltip-left-{{$product->id}}" role="tooltip"
                                    class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    quick view
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-roboto uppercase text-base font-light text-gray-700">{{ $product->name }}</p>
                            @foreach ($product->options as $option)
                            @foreach ($option->optionValues as $value)
                            {{ $value->name }}
                                
                            @endforeach
                            @endforeach
                            <p class="font-roboto uppercase text-base font-light text-gray-700">LE {{ number_format($product->price,2,'.','') }}</p>
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
