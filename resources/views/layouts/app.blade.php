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

            <x-footer />
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
