<div class="">

    <div>
        <div class="flex justify-between items-start pb-4">
            <button id="filter"
                class="filter flex items-center gap-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-2.5 px-3">
                <span class="font-medium">Filter</span>
                <x-svgs.expand-filter class="w-4 h-4" />
            </button>

            <div class="w-48">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-gray-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <input type="number" id="phone"
                            class="focus:ring-0 focus:border-0 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                            placeholder="LE: " min="0" max="10000" autocomplete="off" required>
                        <span class="text-gray-500 text-2xl px-2">-</span>
                        <input type="number" id="phone"
                            class="focus:ring-0 bg-gray focus:border-0-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                            placeholder="LE: " min="0" max="10000" autocomplete="off" required>
                    </div>
                    <input id="small-range" type="range" value="50" min='0' max="10000"
                        class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
                </div>

                {{-- size  --}}
                <div class="flex-flex-col justify-start items-center gap-y-4">
                    <span class="font-bold text-xl w-full">Size</span>
                    <div class="flex flex-col ">

                        <div class="flex items-center rounded">
                            <input id="bordered-checkbox-1" type="checkbox"
                                class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                            <label for="bordered-checkbox-1"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                        </div>

                        <div class="flex items-center rounded">
                            <input id="bordered-checkbox-1" type="checkbox"
                                class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                            <label for="bordered-checkbox-1"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                        </div>

                        <div class="flex items-center rounded">
                            <input id="bordered-checkbox-1" type="checkbox"
                                class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                            <label for="bordered-checkbox-1"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                        </div>

                        <div class="flex items-center rounded">
                            <input id="bordered-checkbox-1" type="checkbox"
                                class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                            <label for="bordered-checkbox-1"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                        </div>

                        <div class="flex items-center rounded">
                            <input id="bordered-checkbox-1" type="checkbox"
                                class="w-4 h-4 bg-gray-100 rounded border-gray-300 dark:border-gray-600 focus:ring-0">
                            <label for="bordered-checkbox-1"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Default radio</label>
                        </div>

                    </div>
                </div>

                {{-- Color  --}}
                <div class="flex-flex-col justify-start items-center gap-y-4">
                    <span class="font-bold text-xl w-full">Color</span>
                    <div class="flex flex-col">
                        <div class="flex items-center mr-4 py-1">
                            <input id="red-radio" type="radio" name="colored-radio"
                                class="w-6 h-6 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Red</label>
                        </div>
                        <div class="flex items-center mr-4 py-1">
                            <input id="green-radio" type="radio" name="colored-radio"
                                class="w-6 h-6 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="green-radio"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Green</label>
                        </div>
                        <div class="flex items-center mr-4 py-1">
                            <input checked id="purple-radio" type="radio" name="colored-radio"
                                class="w-6 h-6 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="purple-radio"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Purple</label>
                        </div>
                        <div class="flex items-center mr-4 py-1">
                            <input id="teal-radio" type="radio" name="colored-radio"
                                class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="teal-radio"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Teal</label>
                        </div>
                        <div class="flex items-center mr-4 py-1">
                            <input id="yellow-radio" type="radio" name="colored-radio"
                                class="w-6 h-6 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="yellow-radio"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Yellow</label>
                        </div>
                        <div class="flex items-center mr-4 py-1">
                            <input id="orange-radio" type="radio" name="colored-radio"
                                class="w-6 h-6 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="orange-radio"
                                class="py-2 ml-2 w-full text-sm  text-gray-500 dark:text-gray-300">Orange</label>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

</div>
