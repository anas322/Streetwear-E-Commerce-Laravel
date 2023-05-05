<div>
    <div class="flex justify-between items-center pb-8 ">
        <div class="flex gap-x-4 items-center">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model="search" type="search" id="table-search"
                    class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-white rounded-lg focus:ring-0 border border-gray-300  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white placeholder:text-xs"
                    placeholder="Search by Customer name..">
            </div>

            <div>
                <div>
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                        class="inline-flex items-center tracking-wide text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <span class="sr-only">Action button</span>
                        Sort By
                        <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAction"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownActionButton">
                            <li>
                                <span
                                    class="block py-2 px-4 hover:cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Recently added</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Add
                    User
                </span>
            </button>
        </div>
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Customer Name
                    </th>
                    {{-- <th scope="col" class="py-3 px-6">
                        Slug
                    </th> --}}
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        No. Of Orders
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Total Amount Spent
                    </th>
                </tr>
            </thead>
            <tbody wire:loading.remove wire:target="search">
                @foreach ($customers as $cus)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$cus->name}}
                    </th>
                    {{-- <td class="py-4 px-6">
                        {{$cus->slug}}
                    </td> --}}
                    <td class="py-4 px-6">
                        {{$cus->email}}
                    </td>
                    <td class="py-4 px-6">
                        {{ $cus->orders->count()  }}
                    </td>
                    <td class="py-4 px-6">
                        EGP {{ $cus->orders->sum('total_price')   }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <x-svgs.spinner wire:loading wire:target="search" />
    </div>

    <div class="pt-6">
        {{ $customers->links() }}
    </div>
</div>
