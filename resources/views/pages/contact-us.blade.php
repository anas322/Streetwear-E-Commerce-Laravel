<x-app-layout>

     <x-slot name="header">
        <div class="wow zoomInDown overflow-hidden h-64 sm:h-96 relative">
            <img src="{{ asset('storage/dashboard/contact.jpg') }}" class="object-cover h-full w-full"
                style="object-position: 13% 21%" alt="streetwearts prducts header background">

                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                    <span class="uppercase  font-bold font-roboto text-white text-9xl" >contact</span>
                </div>
        </div>


        <div class="wow zoomInRight w-full py-24 container mx-auto md:px-0 px-8">

            <div class="flex flex-col justify-start items-center md:flex-row gap-8 ">
                <div class="md:basis-1/2 basis-full text-center">
                    <span class="uppercase font-bold font-roboto text-7xl text-gray-800 pb-8 " >Get in <span class="md:block text-cyan-600 pl-36">touch</span></span>
                </div>

                <div class="md:basis-1/2 basis-full pt-8 w-full md:w-auto">
                    

                    <form class="w-full">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <input type="text" id="first_name" class="focus:ring-0 border-0 border-b-2 border-gray-300 text-gray-900 text-base rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First Name" required>
                            </div>

                            <div>
                                <input type="text" id="last_name" class= " focus:ring-0 border-0 border-b-2 border-gray-300 text-gray-900 text-base rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Last Name" required>
                            </div>

                            <div>
                                <input type="text" id="Email" class= " focus:ring-0 border-0 border-b-2 border-gray-300 text-gray-900 text-base rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email Address" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-base text-gray-900 rounded-sm   focus:ring-0 border-0 border-b-2 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                        </div>                  

                        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Submit</button>
                    </form>


                </div>
            </div>

        </div>
    </x-slot>

</x-app-layout>
