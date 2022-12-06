<x-app-layout>
    <div class="container mx-auto px-4">

        <header class="py-24">
            <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">Your address </h1>
        </header>
    
        
        <div class="flex lg:flex-row flex-col justify-center gap-4 mb-8">
            <div class="lg:basis-3/5 w-full basis-full flex lg:flex-row flex-col gap-8">
                

                
                <form class="w-full">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" id="first_name" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                        </div>

                        <div>
                            <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" id="last_name" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                        </div>

                        <div>
                            <label for="phone" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Phone number</label>
                            <input type="tel" id="phone" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="01*********" required>
                        </div>

                        <div>
                            <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Country</label>
                            <select id="countries" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>

                        <div>
                            <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">City</label>
                            <select id="countries" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>

                        <div>
                            <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Region</label>
                            <select id="countries" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>

                        <div>
                            <label for="Building" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Building</label>
                            <input type="text" id="Building" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                        </div>

                        <div>
                            <label for="Floor" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Floor</label>
                            <input type="text" id="Floor" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div>
                            <label for="Apartment" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Apartment</label>
                            <input type="text" id="Apartment" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        
                    </div>
                    <div class="mb-6">
                        <label for="address" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Address line</label>
                        <input type="text" id="address" class="border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex: xxx street, etc..." required>
                    </div>
                    
                     

                  

                    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
                </form>



            </div>

            <div class="lg:basis-2/5 basis-full ">
                
                <livewire:profile-card />

            </div>
        </div>
    </div>

</x-app-layout>
