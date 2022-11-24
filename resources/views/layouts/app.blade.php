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
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        {{-- <livewire:search-input />  --}}
        <x-jet-banner />

        <div class="font-sans antialiased bg-white">
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
        {{-- jquery  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- wow.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- wow.js initilization  --}}
        <script>new WOW().init();</script>
        {{-- jquery js file  --}}
        @vite(['resources/js/jquery.js','resources/js/main.js'])
    
    </body>
</html>
