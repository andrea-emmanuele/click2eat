<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Norican -->
        <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
        <!-- Solway -->
        <link href="https://fonts.googleapis.com/css2?family=Solway:wght@700&display=swap" rel="stylesheet">
        <!-- Montserrat -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('layouts.navigation')
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">Login</h1>
            </div>
        </div>
        
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @include('layouts.footer')
    </body>
</html>
