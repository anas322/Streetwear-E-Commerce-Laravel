<x-app-layout>
    {{-- background header  --}}
    <x-slot name="header">
        <div class="overflow-hidden h-64 sm:h-96">
            <img src="{{ asset('images/products/bads.jpg') }}" class="object-cover h-full w-full"
                style="object-position: 13% 21%" alt="streetwearts prducts header background">
        </div>
    </x-slot>

    <div class="flex gap-x-8 py-28 mb-8 overflow-x-hidden">
        {{-- filter section  --}}
        <div class="md:inline-block hidden">
            <div class="flex flex-col justify-center space-y-6 lg:w-80 px-8 ">

                {{-- price  --}}
                <div class="space-y-4 ">
                    <button id="price" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-lg">Price</span>
                        <span id="sign" class="font-normal text-2xl">+</span>
                    </button>
                    
                    <div data-filter-name="price" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex pb-3">
                                <input type="number" id="phone" class="focus:ring-0 focus:border-0 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" max="10000"  autocomplete="off" required>
                            <span class="text-gray-500 text-2xl px-2">-</span>
                                <input type="number" id="phone" class="focus:ring-0 bg-gray focus:border-0-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" max="10000"  autocomplete="off"required>
                        </div>
                        <input id="small-range" type="range" value="50" min='0' max="10000" class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
                    </div>
                </div>
                <hr class="!mt-0">
                {{-- size  --}}
                <div class="space-y-4 ">
                    <button id="size" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-lg">Size</span>
                        <span id="sign" class="font-normal text-2xl">+</span>
                    </button>
                    
                    <div data-filter-name="size" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-col ">

                            <div class="flex items-center pl-4 rounded">
                                <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                           
                            <div class="flex items-center pl-4 rounded">
                                <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>

                            <div class="flex items-center pl-4 rounded">
                                <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>

                            <div class="flex items-center pl-4 rounded">
                                <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>

                            <div class="flex items-center pl-4 rounded">
                                <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                      
                        </div>
                    </div>
                </div>
                <hr class="!mt-0">
                   
                
                {{-- color  --}}
                <div class="space-y-4 ">
                    <button id="color" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-lg">Color</span>
                        <span id="sign" class="font-normal text-2xl">+</span>
                    </button>
                    
                    <div data-filter-name="color" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-col">
                            <div class="flex items-center mr-4 pl-4 py-1">
                                <input id="red-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="red-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Red</label>
                            </div>
                            <div class="flex items-center mr-4 pl-4 py-1">
                                <input id="green-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="green-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Green</label>
                            </div>
                            <div class="flex items-center mr-4 pl-4 py-1">
                                <input checked id="purple-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="purple-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Purple</label>
                            </div>
                            <div class="flex items-center mr-4 pl-4 py-1">
                                <input id="teal-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="teal-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Teal</label>
                            </div>
                            <div class="flex items-center mr-4 pl-4 py-1">
                                <input id="yellow-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="yellow-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Yellow</label>
                            </div>
                            <div class="flex items-center mr-4 pl-4 py-1">
                                <input id="orange-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="orange-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Orange</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="!mt-0">
                   
                {{-- sort by --}}
                <div class="space-y-4 ">
                    <button id="sort" class="filter flex items-center justify-between w-full">
                        <span class="font-extralight text-lg">Sort by</span>
                        <span id="sign" class="font-normal text-2xl">+</span>
                    </button>
                    
                    <div data-filter-name="sort" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-col">
                           <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                           <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                           <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                           <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                           <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                           <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                           <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="py-2 ml-2 w-full text-sm text-gray-500 dark:text-gray-300">Default radio</label>
                            </div>
                        </div>
                    </div>
                </div>
                   
                
                
            </div>
        </div>

        {{-- products section  --}}
        <div class="w-full md:pr-8 px-8 md:pl-0 ">
            {{-- filter --}}
            <div class="">

                <div>
                    <div class="flex justify-between items-start pb-4">
                        <button id="filter" class="filter flex items-center gap-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-2.5 px-3">
                            <span class="font-medium">Filter</span>
                            <x-svgs.expand-filter class="w-4 h-4" />
                        </button>

                        <div class="w-48">
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-gray-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>LATEST</option>
                                <option value="Low Price">Low Price</option>
                                <option value="High Price">High Price</option>
                            </select>
                        </div>
                    </div>

                    <div data-filter-name="filter" class="max-h-0 overflow-hidden transition-all duration-700">
                        <div class="flex flex-wrap justify-between max-h-80 gap-6 py-4">

                            {{-- price  --}}
                           <div class="flex flex-col justify-start items-center gap-y-4">
                                <span class="font-bold text-xl w-full">Price</span>
                                <div class="flex pb-3">
                                    <input type="number" id="phone" class="focus:ring-0 focus:border-0 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" max="10000"  autocomplete="off" required>
                                    <span class="text-gray-500 text-2xl px-2">-</span>
                                    <input type="number" id="phone" class="focus:ring-0 bg-gray focus:border-0-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="LE: " min="0" max="10000"  autocomplete="off"required>
                                </div>
                                <input id="small-range" type="range" value="50" min='0' max="10000" class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
                           </div>

                           {{-- size  --}}
                           <div class="flex-flex-col justify-start items-center gap-y-4">
                                <span class="font-bold text-xl w-full">Size</span>
                                <div class="flex flex-col ">

                                    <div class="flex items-center rounded">
                                        <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                        <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                                    </div>
                                
                                    <div class="flex items-center rounded">
                                        <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                        <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                                    </div>

                                    <div class="flex items-center rounded">
                                        <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                        <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                                    </div>

                                    <div class="flex items-center rounded">
                                        <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                        <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                                    </div>

                                    <div class="flex items-center rounded">
                                        <input id="bordered-checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                                        <label for="bordered-checkbox-1" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                                    </div>
                            
                                </div>
                           </div>

                           {{-- Color  --}}
                           <div class="flex-flex-col justify-start items-center gap-y-4">
                                <span class="font-bold text-xl w-full">Color</span>
                                <div class="flex flex-col">
                                    <div class="flex items-center mr-4 py-1">
                                        <input id="red-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="red-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Red</label>
                                    </div>
                                    <div class="flex items-center mr-4 py-1">
                                        <input id="green-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="green-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Green</label>
                                    </div>
                                    <div class="flex items-center mr-4 py-1">
                                        <input checked id="purple-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="purple-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Purple</label>
                                    </div>
                                    <div class="flex items-center mr-4 py-1">
                                        <input id="teal-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="teal-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Teal</label>
                                    </div>
                                    <div class="flex items-center mr-4 py-1">
                                        <input id="yellow-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="yellow-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Yellow</label>
                                    </div>
                                    <div class="flex items-center mr-4 py-1">
                                        <input id="orange-radio" type="radio"  name="colored-radio" class="w-6 h-6 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="orange-radio" class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Orange</label>
                                </div>
                            </div>
                           </div>


                        </div>
                    </div>

                </div>

            </div>

            <div class="grid grid-cols-6  2xl:gap-x-12 xl:gap-x-10 gap-x-4 sm:gap-y-28 gap-y-32 w-full">
                {{-- images  --}}
                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 col-span-3">
                    <div class="image-wrapper 2xl:h-[40rem] xl:h-[35rem] lg:h-[28rem] md:h-[30rem] h-[22rem]">
                        <div class="inner-image-wrapper h-full relative">
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 first-image transition-all duration-700"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131699_4022c38f-7561-4051-84ea-a19bd1c96856_2048x.jpg?v=1665909425 2048w" />
                        
                                <img class="h-full w-full object-cover  absolute top-0 left-1/2 -translate-x-1/2 second-image transition-all duration-700 opacity-0 hover:opacity-100"
                                    src="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_460x.jpg?v=1665909425 460w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_540x.jpg?v=1665909425 540w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_720x.jpg?v=1665909425 720w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_900x.jpg?v=1665909425 900w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1080x.jpg?v=1665909425 1080w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1296x.jpg?v=1665909425 1296w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1512x.jpg?v=1665909425 1512w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_1728x.jpg?v=1665909425 1728w, //cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131695_2172d719-d2e9-4d77-b485-cce67ab96e1a_2048x.jpg?v=1665909425 2048w" />

                                <span class="absolute top-4 left-4 uppercase py-1 rounded-sm px-4 font-moda bg-red-600 text-white">HOT</span>
                                <span class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50" data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                                    <x-svgs.expand class="w-6 h-6 inline-block"/>
                                    <div id="tooltip-left" role="tooltip" class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        quick view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </span>
                        </div>
                        <div class="space-y-3 my-4 ">
                            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
                            <p class="font-semibold">LE 680.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
