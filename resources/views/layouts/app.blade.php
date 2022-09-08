<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} - {{ env("APP_SUBNAME") }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/f375b4ed15.js" crossorigin="anonymous"></script>

        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased bg-gray-200">
        <div class="h-screen flex flex-col">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="flex-none px-6 py-1 border-b border-coral bg-white text-sky-700 text-xl">
                    {{ $header }}
                </header>
            @endisset


            <!-- Page Content -->
            <main class="flex-1 overflow-y-scroll">
                {{ $slot }}
            </main>

            @include('layouts.footer')
        </div>

        @livewireScripts
    </body>
</html>
