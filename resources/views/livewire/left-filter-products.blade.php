 {{-- filter section  --}}
<div class="md:inline-block hidden">
    <div class="flex flex-col justify-center space-y-6 lg:w-80 px-8 ">

        {{-- price  --}}
        <div class="space-y-4 ">
            <button id="price" class="filter flex items-center justify-between w-full">
                <span class="font-extralight text-base text-gray-500">Price</span>
                <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
            </button>
            
            <div data-filter-name="price" class="max-h-0 overflow-hidden transition-all duration-700">
                <div class="flex items-center pb-3">
                        <input type="number" id="phone" class="focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" max="10000"  autocomplete="off" required>
                    <span class="text-gray-500 text-2xl px-2">-</span>
                        <input type="number" id="phone" class="focus:ring-0 focus:border-gray-300 border border-gray-300 text-gray-900 text-lg rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" max="10000"  autocomplete="off"required>
                </div>
                <input id="small-range" type="range" value="50" min='0' max="10000" class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
            </div>
        </div>

        <hr class="!mt-0">

        {{-- size  --}}
        <div class="space-y-4 ">
            <button id="size" class="filter flex items-center justify-between w-full">
                <span class="font-extralight text-base text-gray-500">Size</span>
                <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
            </button>
            
            <div data-filter-name="size" class="max-h-0 overflow-hidden transition-all duration-700">
                <div class="flex flex-row gap-3 flex-wrap">
                    
                    @for ($i = 0; $i < 10; $i++)
                        <div class="flex items-center pl-4 rounded">
                            <input id="bordered-checkbox-1" type="checkbox" class="w-5 h-5 bg-gray-100 rounded-full border-gray-300 dark:border-gray-600 focus:ring-0 ">
                            <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-lg  text-gray-400 dark:text-gray-200">M</label>
                        </div>
                    @endfor
                
                </div>
            </div>
        </div>
        <hr class="!mt-0">
            
        
        {{-- color  --}}
        <div class="space-y-4 ">
            <button id="color" class="filter flex items-center justify-between w-full">
                <span class="font-extralight text-base text-gray-500">Color</span>
                <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
            </button>
            
            <div data-filter-name="color" class="max-h-0 overflow-hidden transition-all duration-700">
                <div class="flex flex-row gap-3 flex-wrap">

                    @for ($i = 0; $i < 6; $i++)
                        <div class="flex items-center mr-4 pl-4 py-1">
                            <input id="red-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-200">Red</label>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
        <hr class="!mt-0">
            
        {{-- sort by --}}
        <div class="space-y-4 ">
            <button id="sort" class="filter flex items-center justify-between w-full">
                <span class="font-extralight text-base text-gray-500">Sort by</span>
                <span id="sign" class="font-normal text-2xl text-gray-500">+</span>
            </button>
            
            <div data-filter-name="sort" class="max-h-0 overflow-hidden transition-all duration-700">
                <div class="flex flex-col">

                    @for ($i = 0; $i < 6; $i++)
                        <div class="flex items-center mb-2 pl-2">
                            <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-200">Price, high to low</label>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
            
        
        
    </div>
</div>