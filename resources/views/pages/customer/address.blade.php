<x-app-layout>
    <div class="container mx-auto px-4">

        <header class="py-24">
            <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">Your address </h1>
        </header>


        <div class="flex lg:flex-row flex-col justify-center gap-4 mb-8">
            <div class="lg:basis-3/5 w-full basis-full flex lg:flex-row flex-col gap-8">


                <form class="w-full" action="{{ route('address.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" name="first_name"
                                value="{{ auth()->user()->address->first_name ?? '' }}" id="first_name"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John">

                            @error('first_name')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror

                        </div>

                        <div>
                            <label for="last_name"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" name="last_name"
                                value="{{ auth()->user()->address->last_name ?? '' }}" id="last_name"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Doe">

                            @error('last_name')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="phone"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Phone
                                number</label>
                            <input type="tel" name="phone_number"
                                value="{{ auth()->user()->address->phone_number ?? '' }}" id="phone"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="01*********">

                            @error('phone_number')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="countries"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Country</label>
                            <select id="countries" name="country"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Choose a country</option>
                                <option value="Egypt" selected>Egypt</option>
                            </select>

                            @error('country')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="city"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">City</label>
                            <select id="city" name="city"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Choose a city</option>
                                <option value="Cairo" selected>Cairo</option>
                            </select>

                            @error('city')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="region"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Region</label>
                            <select id="region" name="region"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Choose a region</option>
                                <option value="Nasr City" selected>Nasr City</option>
                            </select>

                            @error('region')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="Building"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Building</label>
                            <input type="text" name="building_number"
                                value="{{ auth()->user()->address->building_number ?? '' }}" id="Building"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @error('building_number')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="Floor"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Floor</label>
                            <input type="text" name="floor_number"
                                value="{{ auth()->user()->address->floor_number ?? '' }}" id="Floor"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @error('floor_number')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="Apartment"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Apartment</label>
                            <input type="text" name="apartment_number"
                                value="{{ auth()->user()->address->apartment_number ?? '' }}" id="Apartment"
                                class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @error('apartment_number')
                                <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span> {{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-6">
                        <label for="address"
                            class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Address line</label>
                        <input type="text" name="address_line_1"
                            value="{{ auth()->user()->address->address_line_1 ?? '' }}" id="address"
                            class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex: xxx street, etc...">

                        @error('address_line_1')
                            <div class="flex pt-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span> {{ $message }}</span>
                                </div>
                            </div>
                        @enderror
                    </div>





                    <button type="submit"
                        class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                        Changes</button>
                </form>



            </div>

            <div class="lg:basis-2/5 basis-full ">

                <livewire:profile-card />

            </div>
        </div>
    </div>

</x-app-layout>
