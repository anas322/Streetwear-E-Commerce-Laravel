{{-- footer section  --}}
<footer class="px-4 sm:px-6 dark:bg-gray-900 bg-gray-800 relative z-[1] overflow-x-hidden">
    <x-svgs.footer-background class="absolute right-0 bottom-0 top-0 z-[-1] w-full h-full" />
    <div class="md:flex md:justify-between max-w-7xl mx-auto py-24">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center pr-4">
                <x-application-logo class="mr-3 h-16 w-16 fill-slate-50" alt="street wear Logo" />
                <span class="self-center text-2xl font-roboto font-semibold whitespace-nowrap text-white">Street Wear</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-white">Social</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-3">
                        <a href="https://www.instagram.com/streetwearts/?hl=en" target="_blank" class="hover:underline text-gray-500 hover:text-gray-600">Instagram</a>
                    </li>
                    <li>
                        <a href="https://wa.me/+201200071007" class="hover:underline text-gray-500 hover:text-gray-600">Whatsapp</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-white">Shop</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-3">
                        <a href="#" class="hover:underline text-gray-500 hover:text-gray-600 ">SHOES</a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="hover:underline text-gray-500 hover:text-gray-600">TROUSERS</a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="hover:underline text-gray-500 hover:text-gray-600">JACKETS</a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="hover:underline text-gray-500 hover:text-gray-600">HOODIES</a>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-white">COMPANY</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    @auth
                        <li class="mb-3">
                            <a href="{{ route('profile.show') }}" class="hover:underline text-gray-500 hover:text-gray-600 capitalize">My account</a>
                        </li>
                    @elseauth
                        <li class="mb-3">
                            <a href="{{route('login')}}" class="hover:underline text-gray-500 hover:text-gray-600 capitalize ">login</a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ route('register') }}" class="hover:underline text-gray-500 hover:text-gray-600 capitalize">Register</a>
                        </li>
                    @endguest
                    

                    <li class="mb-3">
                        <a href="{{ route('cart') }}" class="hover:underline text-gray-500 hover:text-gray-600 capitalize">shpping cart</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-white">HELP AND SUPPORT</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="{{ route('contact') }}" class="hover:underline text-gray-500 hover:text-gray-600">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between pb-8">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date("Y") }} <a href="{{ url('/') }}" class="hover:underline text-gray-500 hover:text-gray-600">street wear™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://www.instagram.com/streetwearts/?hl=en" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="https://wa.me/+201200071007" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>
                <span class="sr-only">whatsapp link</span>
            </a>
        </div>
    </div>
</footer>

