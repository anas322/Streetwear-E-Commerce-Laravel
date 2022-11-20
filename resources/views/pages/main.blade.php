<x-app-layout>
    {{-- header slider  --}}
    <x-slot name="header">
        {{-- carousel header  --}}
        <div id="indicators-carousel" class="relative sm:h-screen h-[50vh]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden h-full">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                    id="carousel-item-1" data-carousel-item="active">
                    <img src="{{asset('images/dashboard/image7.jpg')}}"
                        class="object-cover h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                    id="carousel-item-2" data-carousel-item="">
                    <img src="{{asset('images/dashboard/image5.jpg')}}"
                        class="object-cover h-full object-top absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform"
                    id="carousel-item-3" data-carousel-item="">
                    <img src="{{asset('images/dashboard/image6.jpg')}}"
                        class="object-cover h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="sm:hidden  h-[50vh]">
            <header class="flex items-center flex-col justify-center h-full font-semibold max-w-3xl mx-auto space-y-4">
                <h1 class="md:text-6xl text-5xl text-center font-moda uppercase pb-7 px-2"> fashion quote </h1>
                <p class="text-gray-400 text-center font-normal px-8 mt-4">Don't be into trends. Don't make fashion own
                    you, but you decide what you are, what you want to express by the way you dress and the way to live.
                </p>
            </header>
        </div>
    </x-slot>

    <div class="container mx-auto">
        {{-- latest arrivals section  --}}
        <div class="min-h-screen pb-8 z-10">
            <header class="pt-12 font-semibold max-w-3xl mx-auto h-[30vh]"> 
                <h1 class="md:text-6xl text-4xl text-center font-moda pb-7"> LATEST ARRIVALS </h1>
                <p class="text-gray-400 text-center font-normal px-4">Fashion is part of the daily air and it changes all the
                    time, with all the events. You can even see the approaching of a revolution in clothes. You can see and
                    feel everything in clothes.</p>
            </header>

            <div class="swiper mySwiper !mr-4 !pt-8 " >
                <div class="swiper-wrapper">
                    <div class="swiper-slide pl-4 ">
                        <div class="overflow-hidden rounded-md h-[30rem] shadow-xl">
                            <img src="{{ asset('images/products/image1.webp') }}"
                                class="w-full h-full object-cover scale-105 hover:scale-100 transition rounded-lg">
                        </div>
                        <div class="pt-3 space-y-2">
                            <p class="text-gray-400 text-medium capitalize font-medium"> jackets </p>
                            <p class="uppercase font-medium"> white tee </p>
                            <p class="text-gray-400 font-medium"> $32.00 </p>
                        </div>
                    </div>

                    <div class="swiper-slide pl-4">
                        <div class="overflow-hidden rounded-md h-[30rem] shadow-xl">
                            <img src="{{ asset('images/products/image2.webp') }}"
                                class="w-full h-full object-cover scale-105 hover:scale-100 transition rounded-lg">
                        </div>
                        <div class="pt-3 space-y-2">
                            <p class="text-gray-400 text-medium capitalize font-medium"> jackets </p>
                            <p class="uppercase font-medium"> white tee </p>
                            <p class="text-gray-400 font-medium"> $32.00 </p>
                        </div>
                    </div>

                    <div class="swiper-slide pl-4">
                        <div class="overflow-hidden rounded-md h-[30rem] shadow-xl">
                            <img src="{{ asset('images/products/image3.webp') }}"
                                class="w-full h-full object-cover scale-105 hover:scale-100 transition rounded-lg">
                        </div>
                        <div class="pt-3 space-y-2">
                            <p class="text-gray-400 text-medium capitalize font-medium"> jackets </p>
                            <p class="uppercase font-medium"> white tee </p>
                            <p class="text-gray-400 font-medium"> $32.00 </p>
                        </div>
                    </div>

                    <div class="swiper-slide pl-4">
                        <div class="overflow-hidden rounded-md h-[30rem] shadow-xl">
                            <img src="{{ asset('images/products/image4.webp') }}"
                                class="w-full h-full object-cover scale-105 hover:scale-100 transition rounded-lg">
                        </div>
                        <div class="pt-3 space-y-2">
                            <p class="text-gray-400 text-medium capitalize font-medium"> jackets </p>
                            <p class="uppercase font-medium"> white tee </p>
                            <p class="text-gray-400 font-medium"> $32.00 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination !static pt-3"></div>
        </div>

        {{-- categories section  --}}
        <div class="mb-8 ">
            <header class="lg:pt-16 pt-8 font-semibold max-w-3xl mx-auto h-[10vh]">
                <h1 class="md:text-6xl text-5xl text-center font-moda"> SHOP CATEGORIES </h1>
            </header>

            <div class="grid grid-cols-6 pt-28 xl:px-52 lg:px-20 px-7 gap-8">
                <div class="col-span-3 ">
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="https://zammit.s3-eu-west-1.amazonaws.com/website_assets/images/000/061/035/medium/image.png?1666317293" class="object-cover w-full h-full scale-105 hover:scale-100 transition rounded-sm">
                    </div>

                    <div class="flex flex-col justify-center items-center pt-8 gap-y-4">
                        <p class="font-semibold text-xl">TROUSERS</p>
                        <button class="flex space-x-3 text-white bg-gray-900 hover:scale-105 transition py-2 px-6 rounded-sm ">
                        <span>EXPLORE</span>  
                        <x-svgs.explore class="w-7 h-5 " />
                        </button>
                    </div>
                </div>
                
                <div class="col-span-3 ">
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="https://zammit.s3-eu-west-1.amazonaws.com/website_assets/images/000/061/036/medium/image.png?1666317388" class="object-cover w-full h-full scale-105 hover:scale-100 transition rounded-sm">
                    </div>

                    <div class="flex flex-col justify-center items-center pt-8 gap-y-4">
                        <p class="font-semibold text-xl">SHOES</p>
                        <button class="flex space-x-3 text-white bg-gray-900 hover:scale-105 transition py-2 px-6 rounded-sm ">
                        <span>EXPLORE</span>  
                        <x-svgs.explore class="w-7 h-5 " />
                        </button>
                    </div>
                </div>

                <div class="col-span-3 ">
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="https://zammit.s3-eu-west-1.amazonaws.com/website_assets/images/000/061/033/medium/image.png?1666317206" class="object-cover w-full h-full scale-105 hover:scale-100 transition rounded-sm">
                    </div>

                    <div class="flex flex-col justify-center items-center pt-8 gap-y-4">
                        <p class="font-semibold text-xl">HOODIES</p>
                        <button class="flex space-x-3 text-white bg-gray-900 hover:scale-105 transition py-2 px-6 rounded-sm ">
                        <span>EXPLORE</span>  
                        <x-svgs.explore class="w-7 h-5 " />
                        </button>
                    </div>
                </div>

                <div class="col-span-3 ">
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="https://zammit.s3-eu-west-1.amazonaws.com/website_assets/images/000/061/032/medium/image.png?1666317169" class="object-cover w-full h-full scale-105 hover:scale-100 transition rounded-sm">
                    </div>

                    <div class="flex flex-col justify-center items-center pt-8 gap-y-4">
                        <p class="font-semibold text-xl">JACKETS</p>
                        <button class="flex space-x-3 text-white bg-gray-900 hover:scale-105 transition py-2 px-6 rounded-sm ">
                        <span>EXPLORE</span>  
                        <x-svgs.explore class="w-7 h-5 " />
                        </button>
                    </div>
                </div>

            </div>
        </div>

        {{-- where to find us section  --}}
        <div class="min-h-screen py-20 bg-slate-50">
            <header class="lg:pt-16 pt-8 font-semibold max-w-3xl mx-auto h-[10vh]">
                <h1 class="md:text-6xl text-5xl text-center font-moda px-3"> WHERE TO FIND US </h1>
            </header>

            <div class="flex flex-col lg:flex-row justify-around items-center md:space-x-8 space-y-8 lg:pt-40 pt-16 px-4">
                <x-svgs.location class="p-8 lg:h-auto h-96 max-w-full" />

                <div class="flex flex-col space-y-8">
                    <div class="flex flex-col items-center justify-center space-y-7">
                        <p class="text-2xl text-end font-bold pb-4 font-arabic" style="letter-spacing:initial">فرع بنها : أمام بوابة القاعات لنادي بنها الرياضي اخر شارع كلية طب</p>
                        <a href="https://goo.gl/maps/237yXv4tbSRPJxQ79" class="rounded-lg py-3 px-6 bg-gray-900 hover:scale-105 transition inline-flex items-center space-x-4 text-white box-content ">
                            <span>Get Direction</span>
                            <x-svgs.small-location  class="w-7 h-7"/>
                        </a>
                    </div>

                    <div class="flex flex-col items-center justify-center space-y-7">
                        <p class="text-2xl text-end font-bold pb-4 font-arabic" style="letter-spacing:initial">فرع مدينة نصر : القاهرة - مدينة نصر - طيبة مول - الدور الاول علوي</p>
                        <a href="https://goo.gl/maps/HvFWbDm6UM7MDi7X6" class="rounded-lg py-3 px-6 bg-gray-900 hover:scale-105 transition inline-flex items-center space-x-4 text-white box-content ">
                            <span>Get Direction</span>
                            <x-svgs.small-location  class="w-7 h-7"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- why shop with us  --}}
    <div class="bg-slate-100">
        <header class="lg:pt-16 pt-8 font-semibold max-w-3xl mx-auto h-[10vh]">
            <h1 class="md:text-6xl text-5xl text-center font-moda"> Why Shop With Us? </h1>
        </header>
        <div class="flex flex-wrap py-24 justify-start gap-y-8">
            <div class="space-y-3 md:basis-2/4 basis-full">
                <x-svgs.cash-on-delivery class="w-40 h-auto mx-auto "/>
                <p class="font-light text-center">CASH ON DELIVERY</p>
                <p class="text-sm text-center">Pay by card or Cash on delivery</p>
            </div>

            <div class="space-y-3 md:basis-2/4 basis-full">
                <x-svgs.car-icon class="w-40 h-auto mx-auto "/>
                <p class="font-light text-center">FREE & EASY RETURNS</p>
                <p class="text-sm text-center">We understand people change their minds</p>
            </div>

            <div class="space-y-3 md:basis-2/4 basis-full">
                <x-svgs.t-shirt class="w-40 h-auto mx-auto "/>
                <p class="font-light text-center">NEW STYLES EVERYDAY</p>
                <p class="text-sm text-center">We offer affordable everyday styles for everyone</p>
            </div>

            <div class="space-y-3 md:basis-2/4 basis-full">
                <x-svgs.like-stars class="w-40 h-auto mx-auto "/>
                <p class="font-light text-center">SATISFACTION GUARANTEED</p>
                <p class="text-sm text-center">You are at the heart of everything we do</p>
            </div>
        </div>
    </div>
</x-app-layout>
