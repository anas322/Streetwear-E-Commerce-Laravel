{{-- filter section  --}}

<div class="flex flex-col justify-center space-y-6 " wire:ignore>

    <!-- price  -->
    <div class="space-y-4 ">
        <button id="price" class="filter flex items-center justify-between w-full">
            <span class="font-extralight text-base text-gray-500">Price</span>
            <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
        </button>
        
        <div data-filter-name="price" class="max-h-0 overflow-hidden transition-all duration-700">
            <div class="flex items-center pb-3">
                    <input type="number" wire:model="firstPrice" wire:keyup.debounce.200ms="emitSearch" id="phone" class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" autocomplete="off">
                <span class="text-gray-500 text-2xl px-2">-</span>
                    <input type="number" wire:model="secondPrice" wire:keyup.debounce.200ms="emitSearch" id="phone" class="w-28 focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" autocomplete="off">
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
