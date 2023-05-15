<x-admin.app-layout>
    <div>
        <h1 class="font-roboto font-semibold text-2xl py-4 text-gray-800">E-commerce</h1>

        <div class="flex justify-between gap-4 flex-wrap">

            <div class="md:basis-1/4 basis-full flex-1 bg-white p-4 rounded-md shadow-sm">
                <div class="card-header flex justify-between items-start">
                    <div class="space-y-4">
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">CLIENTS</h2>
                        <span class="block font-bold text-lg">{{ $clients_count }}</span>
                    </div>

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 text-[#00b8c5] transition duration-75 dark:text-gray-400 group-hover:dark:text-gray-400 dark:group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                </div>

                <hr class="my-3">

                <div class="card-footer flex justify-between">
                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">TODAY CLIENTS</h2>
                        <span class="block font-bold text-lg">{{ $today_clients_count }}</span>
                    </div>

                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">MONTHLY CLIENTS</h2>
                        <span class="block font-bold text-lg">{{ $monthly_clients_count }}</span>
                    </div>
                </div>
            </div>

            <div class="md:basis-1/4 basis-full flex-1 bg-white p-4 rounded-md shadow-sm">
                <div class="card-header flex justify-between items-start">
                    <div class="space-y-4">
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">ORDERS</h2>
                        <span class="block font-bold text-lg">{{ $orders_count }}</span>
                    </div>

                    <div>

                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                            width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667"
                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="w-8 h-8 text-[#00b8c5] transition duration-75 dark:text-gray-400 group-hover:dark:text-gray-400 dark:group-hover:text-white">
                            <g>
                                <defs>
                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                        <path d="M0 512h512V0H0Z" fill="#00b8c5" data-original="#00b8c5"></path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                    <path d="M0 0h391l-60-210H60"
                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(106 406)" fill="none" stroke="#00b8c5" stroke-width="30"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-dasharray="none" stroke-opacity="" data-original="#00b8c5"></path>
                                    <path
                                        d="M0 0c0-16.568-13.432-30-30-30-16.568 0-30 13.432-30 30 0 16.568 13.432 30 30 30C-13.432 30 0 16.568 0 0Z"
                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(256 76)" fill="none" stroke="#00b8c5" stroke-width="30"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-dasharray="none" stroke-opacity="" data-original="#00b8c5"></path>
                                    <path
                                        d="M0 0c0-16.568-13.432-30-30-30-16.568 0-30 13.432-30 30 0 16.568 13.432 30 30 30C-13.432 30 0 16.568 0 0Z"
                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(407 76)" fill="none" stroke="#00b8c5" stroke-width="30"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-dasharray="none" stroke-opacity="" data-original="#00b8c5"></path>
                                    <path d="M0 0h-252.459c-22.301 0-36.806 23.469-26.833 43.417L-271 60"
                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(437 136)" fill="none" stroke="#00b8c5" stroke-width="30"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-dasharray="none" stroke-opacity="" data-original="#00b8c5"></path>
                                    <path d="M0 0h73.861C99.402-89.409 151-270 151-270"
                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(15 466)" fill="none" stroke="#00b8c5" stroke-width="30"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-dasharray="none" stroke-opacity="" data-original="#00b8c5"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

                <hr class="my-3">

                <div class="card-footer flex justify-between">
                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">TODAY ORDERS</h2>
                        <span class="block font-bold text-lg">{{ $today_orders_count }}</span>
                    </div>

                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">MONTHLY ORDERS</h2>
                        <span class="block font-bold text-lg">{{ $monthly_orders_count }}</span>
                    </div>
                </div>
            </div>

            <div class="md:basis-1/4 basis-full flex-1 bg-white p-4 rounded-md shadow-sm">
                <div class="card-header flex justify-between items-start">
                    <div class="space-y-4">
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">EARNINGS</h2>
                        <span class="block font-bold text-lg">{{ $total_earning }}</span>
                    </div>

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="w-8 h-8 text-[#00b8c5] transition duration-75 dark:text-gray-400 group-hover:dark:text-gray-400 dark:group-hover:text-white">
                            <g>
                                <path fill-rule="evenodd"
                                    d="M234.386 133.031a25.878 25.878 0 0 1-17.527-6.806l21.453-12.386a7.981 7.981 0 0 0-8-13.812l-21.357 12.33a26.111 26.111 0 0 1-.541-5.297c0-14.344 11.628-25.971 25.971-25.971s25.971 11.628 25.971 25.971-11.627 25.971-25.97 25.971zm-129.753 20.92 17.09 8.769-6.997 4.04a7.981 7.981 0 0 0 8 13.812l6.978-4.029-.951 19.186 39.63-22.881c3.029-1.749 4.814-4.671 4.988-8.165l.681-13.744 42.63-24.612a26.135 26.135 0 0 1-7.904-13.868l-42.707 24.657-12.244-6.282c-3.112-1.597-6.536-1.512-9.565.237zm275.163 230.508c30.801 0 55.77 24.969 55.77 55.77s-24.969 55.77-55.77 55.77-55.77-24.969-55.77-55.77c-.001-30.8 24.969-55.77 55.77-55.77zm23.794 35.735c-3.206-7.635-9.154-12.22-15.794-14.217v-1.038a8 8 0 0 0-16 0v1.141c-9.607 2.968-16.507 10.973-16 21.408.626 12.916 11.393 18.549 22.77 20.417 3.557.584 10.544 1.852 11.086 6.318l.063.531c.076 3.236-5.204 4.466-7.629 4.76a19.36 19.36 0 0 1-1.749.151c-4.352.104-9.517-1.661-10.683-6.339a7.982 7.982 0 0 0-15.5 3.812c2.216 8.889 8.991 15.011 17.641 17.386v.997a8 8 0 0 0 16 0v-.83c9.912-2.417 18.117-9.339 17.856-20.312a22.05 22.05 0 0 0-.125-2.031c-1.598-13.157-12.718-18.276-24.399-20.194-2.875-.472-9.212-1.639-9.395-5.417-.163-3.343 2.986-5.134 5.861-5.712 4.583-.923 9.351.843 11.246 5.357a7.999 7.999 0 0 0 14.751-6.188zM105.15 298.901a7.972 7.972 0 0 1-9.813-12.563l88.42-68.849a7.963 7.963 0 0 1 7.371-1.299l83.498 27.077 69.516-70.11-6.734.591a7.998 7.998 0 1 1-1.375-15.937l28.783-2.525c5.219-.45 9.449 4.231 8.57 9.33l-3.156 28.229a7.985 7.985 0 0 1-8.813 7.062 7.985 7.985 0 0 1-7.062-8.813l.703-6.287-72.293 72.91a7.985 7.985 0 0 1-8.406 2.252l-84.148-27.302zm-20.716 59.456h31.618c4.406 0 8 3.594 8 8v77.033c0 4.406-3.594 8-8 8H84.434c-4.406 0-8-3.594-8-8v-77.033c0-4.407 3.594-8 8-8zm265.26-121.422c-4.406 0-8 3.594-8 8v134.468c11.042-6.931 24.102-10.944 38.102-10.944 3.227 0 6.403.217 9.517.629V244.935c0-4.406-3.594-8-8-8zm-88.419 82.312h31.619c4.407 0 8.001 3.594 8 8.001V443.39c.001 4.407-3.593 8.001-8 8.001h-31.619c-4.407 0-8.001-3.595-8-8.001V327.248c-.001-4.407 3.593-8.001 8-8.001zM172.854 299.4c-4.406 0-8 3.594-8 8v135.99c0 4.406 3.594 8 8 8h31.618c4.406 0 8-3.594 8-8V307.4c0-4.406-3.594-8-8-8zm61.532-133.825a58.24 58.24 0 0 1-34.364-11.154l-10.42 6.016-.25 5.039c-.311 6.263-2.765 11.995-6.877 16.4 14.727 10.237 32.616 16.244 51.911 16.244 50.291 0 91.059-40.769 91.059-91.059 0-50.291-40.769-91.059-91.059-91.059s-91.059 40.768-91.059 91.059c0 2.447.099 4.87.289 7.267 5.835-1.318 11.981-.569 17.517 2.271l4.488 2.303 10.532-6.081a59.26 59.26 0 0 1-.282-5.76c0-32.317 26.198-58.515 58.515-58.515s58.515 26.198 58.515 58.515c0 32.315-26.198 58.514-58.515 58.514z"
                                    clip-rule="evenodd" fill="#00b8c5" data-original="#00b8c5"></path>
                            </g>
                        </svg>
                    </div>
                </div>

                <hr class="my-3">

                <div class="card-footer flex justify-between">
                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">TODAY EARNINGS</h2>
                        <span class="block font-bold text-lg">{{ $today_earning }}</span>
                    </div>

                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">MONTHLY EARNINGS</h2>
                        <span class="block font-bold text-lg">{{ $monthly_earning }}</span>
                    </div>
                </div>
            </div>

            <div class="md:basis-1/2 basis-full flex-1 bg-white p-4 rounded-md shadow-sm">
            </div>

            <div class="md:basis-1/3 basis-full flex-1 bg-white p-4 rounded-md shadow-sm">
            </div>

        </div>
    </div>



</x-admin.app-layout>
