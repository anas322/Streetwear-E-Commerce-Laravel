{{-- footer section  --}}
<footer class="bg-gray-800 relative z-[1] overflow-x-hidden">
    <x-svgs.footer-background class="absolute right-0 bottom-0 top-0 z-[-1] w-full h-full" />
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-4 justify-items-end md:justify-items-stretch md:py-32 py-20 px-24">
            <div class="col-span-1 flex flex-col space-y-4">
                <x-application-logo class="fill-slate-50 w-24 h-24" />
            </div>

            <div
                class="col-span-3 flex flex-col md:flex-row justify-around items-start space-y-12 md:space-y-0">
                <div class="flex flex-col space-y-6 ">
                    <header class="uppercase text-gray-400 pb-2">
                        Social
                    </header>

                    <a href="">
                        <x-svgs.whatsapp class="w-7 h-7 hover:fill-gray-400" />
                    </a>

                    <a href="">
                        <x-svgs.instagram class="w-7 h-7" />
                    </a>
                </div>

                <div class="flex flex-col space-y-6">
                    <header class="uppercase text-gray-400 pb-2">
                        categories
                    </header>

                    <a href="" class="text-white text-sm hover:text-gray-400">
                        All Products
                    </a>

                    <a href="" class="text-white text-sm hover:text-gray-400">
                        SHOES
                    </a>

                    <a href="" class="text-white text-sm hover:text-gray-400">
                        TROUSERS
                    </a>

                    <a href="" class="text-white text-sm hover:text-gray-400">
                        JACKETS
                    </a>

                    <a href="" class="text-white text-sm hover:text-gray-400">
                        HOODIES
                    </a>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div>
        <p class="text-white font-light text-lg text-center py-4">© {{ date("Y") }} Street Wear</p>
    </div>
</footer>
