<div class="container mx-auto pb-8 px-4">

    <header class="mt-24">
        <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">shpping cart</h1>
        <span class="text-gray-500 font-medium text-lg">You have 5 items in your cart.</span>
    </header>


    {{-- <div class="xl:flex xl:flex-row flex-col gap-x-12 space-y-8 pt-20 justify-between items-start">


        <div class="basis-3/4 flex flex-col gap-y-6 max-w-5xl">
            @for ($i = 0; $i < 5; $i++) <div class="flex justify-between items-start">
                <div>
                    <img class="w-auto sm:h-32 h-24 object-cover float-left"
                        src="{{ asset('images/categories/image10.jpg') }}">
                    <div class="float-right pl-4">
                        <p class="font-bold sm:text-2xl text-lg">Black blouse</p>
                        <p class="text-gray-500 sm:text-base text-sm">Size: Large</p>
                        <p class="text-gray-500 sm:text-base text-sm">Colour: Green</p>
                    </div>
                </div>

                <span class="sm:text-lg text-base font-bold">$40</span>

                <div class="flex items-center space-x-3">
                    <button
                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full  focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <span class="sr-only">Quantity button</span>
                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div>
                        <input type="number" id="second_product"
                            class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="1" required>
                    </div>
                    <button
                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <span class="sr-only">Quantity button</span>
                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <span class="sm:text-lg text-base font-bold">$80</span>

                <button
                    class="text-4xl rotate-45 hover:rotate-180 transition duration-700 font-thin text-red-500">+</button>
        </div>

        @if ($i != 4)
        <hr />
        @endif

        @endfor
    </div> --}}

    <div class="flex lg:flex-row flex-col justify-center gap-4 mb-8">

        <div class="lg:basis-3/5 basis-full">
            
              <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Order #
                                </th>
                                <th scope="col" class="py-3 px-6">
                                   Date
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Total
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @for ($i = 0; $i < 5; $i++)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        # 1735
                                    </th>
                                    <td class="py-4 px-6">
                                        22/6/2017
                                    </td>
                                    <td class="py-4 px-6">
                                       $150.00
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="py-1 px-2 text-red-600 bg-red-100 rounded-lg">
                                            Cancelled
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right flex">
                                        <a href="{{ route('single-order') }}" class="font-medium">
                                            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                    View
                                                </span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>

        </div>
        
        <div class="lg:basis-2/5 basis-full">
            <div class="lg:max-w-sm lg:mx-auto w-full shadow-lg rounded-lg">
                <livewire:order-summary :active="true"/>
            </div>
        </div>
    </div>

    {{-- <div class="empty-cart flex justify-center items-center flex-col space-y-4">
               <x-svgs.empty-cart class="w-40 h-40" />
               <span class="font-medium text-lg text-gray-500">Your cart is currently empty.</span>
               <a href="#" class="underline text-gray-600">Continue shopping</a>
            </div> --}}
</div>

