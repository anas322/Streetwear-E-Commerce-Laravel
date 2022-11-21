<div class="lg:max-w-sm lg:mx-auto w-full  bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="p-1 object-cover object-top h-44 w-44 rounded-full mx-auto shadow "
            src="{{ asset("images/products/image1.webp") }}" alt="product image" />
    </a>
    <div class=" pt-5">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Jane Doe</h5>
            <h4 class="text-sm text-gray-500 font-semibold text-center">Los Angeles, CA</h4>
        </a>
        <div class="flex flex-col items-center mt-2.5">
            <a class="w-full" href="{{ route('orders') }}">
                <div class="flex justify-between px-2 py-3 border border-gray-200 bg-gray-200 hover:bg-gray-300">
                    <div class="flex items-center">
                        <x-svgs.orders class="w-7 h-7 pr-2" />
                        <span class="text-gray-800 font-semibold">Orders</span>
                    </div>

                    <span class="px-3 py-1 rounded-full bg-gray-100 font-semibold">5</span>
                </div>
            </a>
            <a class="w-full" href="{{ route('profile.show') }}">
                <div class="flex justify-between px-2 py-3 border border-gray-200 hover:bg-gray-300">
                    <div class="flex items-center">
                        <x-svgs.profile2-icon class="w-7 h-7 pr-2" />
                        <span class="text-gray-800 font-semibold">Profile</span>
                    </div>

                    <span></span>
                </div>
            </a>

            <a class="w-full" href="{{ route('address') }}">
                <div class="flex justify-between px-2 py-3 border border-gray-200 hover:bg-gray-300">
                    <div class="flex items-center">
                        <x-svgs.address class="w-7 h-7 pr-2" />
                        <span class="text-gray-800 font-semibold">Addresses</span>
                    </div>

                    <span></span>
                </div>
            </a>

        </div>

    </div>
</div>
