<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/jquery.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="font-sans antialiased overflow-x-hidden bg-white">
            <div class="min-h-screen relative">
                @livewire('navigation-menu')
                
                <!-- Page Heading -->
                @if (isset($header))
                <header>
                    {{ $header }}
                </header>
                @endif
                
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>

            {{-- footer section  --}}
            <footer class="bg-gray-800 relative z-[1] overflow-x-hidden">
                <x-svgs.footer-background  class="absolute right-0 bottom-0 top-0 z-[-1] w-full h-full"/>
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-4 justify-items-end md:justify-items-stretch md:py-32 py-20 px-24">
                        <div class="col-span-1 flex flex-col space-y-4">
                            <x-application-logo class="fill-slate-50 w-24 h-24"/>
                        </div>

                    <div class="col-span-3 flex flex-col md:flex-row justify-around items-start space-y-12 md:space-y-0">
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
                                
                                <a href="" class="text-white ">
                                    All Products
                                </a>

                                <a href="" class="text-white ">
                                    SHOES
                                </a>

                                <a href="" class="text-white ">
                                    TROUSERS
                                </a>

                                <a href="" class="text-white ">
                                    JACKETS
                                </a>

                                <a href="" class="text-white ">
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
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(".image-wrapper").mouseenter(function () {
                $(this).find(".expand").removeClass("opacity-0");
            });

            $(".image-wrapper").mouseleave(function () {
                $(this).find(".expand").addClass("opacity-0");
            });

            $(".filter").click(function () {
                const id = $(this).attr("id");
                const element = $(`[data-filter-name=${id}]`);
                element.toggleClass("max-h-0");
                element.toggleClass("max-h-[100rem]");
                let sign = element.hasClass("max-h-0") ? "+" : "-";
                $(this).children("[id=sign]").text(sign);
            });

        </script>
    </body>
</html>
