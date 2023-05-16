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
            aria-controls="dropdown-ecommerce" data-collapse-toggle="dropdown-ecommerce">
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
        <ul id="dropdown-ecommerce" class=" py-2 space-y-2">
            <li>
                <a href="{{ route('admin.product.index') }}"
                    class="font-sans flex items-center w-full p-3 font-normal dark:text-gray-400 transition duration-75 rounded-lg pl-11 group text-xs hover:text-[#00b8c5] hover:bg-[#0c3549] text-white dark:hover:bg-gray-700 tracking-wide">Products</a>
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
            {{-- <span
                class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span> --}}
        </a>
    </li>

    <li>
        <a href="{{ route('admin.promo.index') }}"
            class="font-sans inline-flex items-center py-3 pl-3 pr-24 text-sm font-normal dark:text-gray-400 rounded-r-full text-white hover:text-[#00b8c5] hover:bg-[#0c3549] dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0"
                viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve"
                class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:dark:text-gray-400 dark:text-gray-400 dark:group-hover:text-white">
                <g>
                    <path
                        d="M12 16.476a1 1 0 0 0-1 1v2.172a1 1 0 0 0 1 1 1 1 0 0 0 1-1v-2.172a1 1 0 0 0-1-1zM12 21.908a1 1 0 0 0-1 1v2.172a1 1 0 0 0 1 1 1 1 0 0 0 1-1v-2.172a1 1 0 0 0-1-1zM12 27.34a1 1 0 0 0-1 1v2.172a1 1 0 0 0 1 1 1 1 0 0 0 1-1V28.34a1 1 0 0 0-1-1z"
                        fill="#CBD5E0" data-original="#000000" class=""></path>
                    <path
                        d="M8.867 5.002a3.019 3.019 0 0 0-2.613 2.045l-1.332 4.021C3.298 11.204 2 12.568 2 14.224v3.979a1 1 0 0 0 .693.951C3.941 19.557 5 21.124 5 23.043c0 1.92-1.059 3.488-2.307 3.89a1 1 0 0 0-.693.952v5.976a3.197 3.197 0 0 0 3.182 3.182h15.787l16.978 5.797c1.568.535 3.283-.341 3.8-1.903l1.296-3.918c1.64-.118 2.957-1.49 2.957-3.158v-5.978a1 1 0 0 0-.693-.951c-1.248-.403-2.307-1.97-2.307-3.89 0-1.919 1.059-3.487 2.307-3.89a1 1 0 0 0 .693-.951v-3.977a3.197 3.197 0 0 0-3.182-3.181H27.035L10.06 5.144c-.393-.137-.822-.12-1.192-.142zm.147 1.984c.13-.009.265.008.4.053l11.524 4.004h-13.9l1.114-3.37a.973.973 0 0 1 .862-.687zm-3.832 6.057H11v.951a1 1 0 1 0 2 0v-.951h29.818c.672 0 1.182.51 1.182 1.181v3.405c-1.847.973-3 3.07-3 5.414 0 2.343 1.154 4.44 3 5.412v5.406c0 .672-.51 1.182-1.182 1.182h-29.82c.005-.345.002-.7.002-1.049a1 1 0 0 0-2 0c-.002.347 0 .706.002 1.049h-5.82c-.673 0-1.182-.51-1.182-1.182v-5.404c1.847-.973 3-3.07 3-5.414s-1.154-4.44-3-5.412v-3.407c0-.672.51-1.181 1.182-1.181zm21.976 24h13.77l-1.08 3.265c-.18.543-.725.82-1.254.64z"
                        fill="#CBD5E0" data-original="#000000" class=""></path>
                    <path
                        d="M32.762 25.56c1.78 0 3.244 1.463 3.244 3.243s-1.464 3.246-3.244 3.246-3.246-1.466-3.246-3.246 1.466-3.244 3.246-3.244zm0 2c-.7 0-1.246.544-1.246 1.243s.547 1.246 1.246 1.246 1.244-.546 1.244-1.246-.545-1.244-1.244-1.244zM23.24 16.037a3.26 3.26 0 0 1 3.244 3.244c0 1.78-1.464 3.244-3.245 3.244s-3.246-1.464-3.246-3.244a3.26 3.26 0 0 1 3.246-3.244zm0 2c-.7 0-1.247.545-1.247 1.244 0 .7.547 1.244 1.246 1.244.7 0 1.245-.545 1.245-1.244 0-.7-.545-1.244-1.245-1.244zM32.055 18.574l-9.524 9.524a1 1 0 0 0 1.414 1.414l9.524-9.524a1 1 0 0 0 0-1.414c-.409-.363-1.03-.401-1.414 0z"
                        fill="#CBD5E0" data-original="#000000" class=""></path>
                </g>
            </svg>

            <span class="flex-1 ml-3 whitespace-nowrap tracking-wide">Promo Codes</span>
        </a>
    </li>

    <li>
        <a href="{{ route('home') }}"
            class="font-sans inline-flex items-center py-3 pl-3 pr-24 text-sm font-normal dark:text-gray-400 rounded-r-full text-white hover:text-[#00b8c5] hover:bg-[#0c3549] dark:hover:bg-gray-700">
            <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:dark:text-gray-400 dark:group-hover:text-white"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                </path>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap tracking-wide">Website</span>
        </a>
    </li>
</ul>
