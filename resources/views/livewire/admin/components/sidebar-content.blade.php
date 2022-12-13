<ul class="space-y-2">
    <li>
        <a href="{{ route('admin.dashboard') }}"
            class="font-sans inline-flex items-center py-3 pl-3 pr-24 text-sm font-normal dark:text-gray-400 rounded-r-full text-white hover:text-[#00b8c5] hover:bg-[#0c3549] dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:dark:text-gray-400 dark:group-hover:text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

            <span class="ml-3 tracking-wide">Dashboard</span>
        </a>
    </li>
    <li>
        <button type="button"
            class="inline-flex items-center py-3 pl-3 pr-8 text-sm font-normal dark:text-gray-400 transition duration-75 rounded-r-full group hover:text-[#00b8c5] hover:bg-[#0c3549] text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:dark:text-gray-400 dark:text-gray-400 dark:group-hover:text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>

            <div class="flex items-start">
                <span class="flex-1 ml-3 text-left whitespace-nowrap">E-commerce</span>
                <svg class="w-6 h-6 ml-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </button>
        <ul id="dropdown-example" class="hidden py-2 space-y-2">
            <li>
                <a href="{{ route('admin.product.index') }}"
                    class="font-sans flex items-center w-full p-3 font-normal dark:text-gray-400 transition duration-75 rounded-lg pl-11 group text-xs hover:text-[#00b8c5] hover:bg-[#0c3549] text-white dark:hover:bg-gray-700 tracking-wide">Products</a>
            </li>
            <li>
                <a href="#"
                    class="font-sans flex items-center w-full p-3 font-normal dark:text-gray-400 transition duration-75 rounded-lg pl-11 group text-xs hover:text-[#00b8c5] hover:bg-[#0c3549] text-white dark:hover:bg-gray-700 tracking-wide">Billing</a>
            </li>
            <li>
                <a href="#"
                    class="font-sans flex items-center w-full p-3 font-normal dark:text-gray-400 transition duration-75 rounded-lg pl-11 group text-xs hover:text-[#00b8c5] hover:bg-[#0c3549] text-white dark:hover:bg-gray-700 tracking-wide">Invoice</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('admin.category.index') }}"
            class="font-sans inline-flex items-center py-3 pl-3 pr-24 text-sm font-normal dark:text-gray-400 rounded-r-full text-white hover:text-[#00b8c5] hover:bg-[#0c3549] dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:dark:text-gray-400 dark:text-gray-400 dark:group-hover:text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>

            <span class="flex-1 ml-3 whitespace-nowrap tracking-wide">Categories</span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.customer.index') }}"
            class="font-sans inline-flex items-center py-3 pl-3 pr-24 text-sm font-normal dark:text-gray-400 rounded-r-full text-white hover:text-[#00b8c5] hover:bg-[#0c3549] dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:dark:text-gray-400 dark:text-gray-400 dark:group-hover:text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>

            <span class="flex-1 ml-3 whitespace-nowrap tracking-wide">Customers</span>
            <span
                class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
        </a>
    </li>
    <li>
        <a href="{{ route('home') }}"
            class="font-sans inline-flex items-center py-3 pl-3 pr-24 text-sm font-normal dark:text-gray-400 rounded-r-full text-white hover:text-[#00b8c5] hover:bg-[#0c3549] dark:hover:bg-gray-700">
            <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:dark:text-gray-400 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
            <span class="flex-1 ml-3 whitespace-nowrap tracking-wide">Website</span>
        </a>
    </li>
</ul>
