<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icon -->
        <link rel="icon" href="{{ asset('/images/legacy-logo.png') }}">

        <!-- Title -->
        <title>Legacy Roleplay: CAD</title>

        <!-- Font -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


        <!-- Styling -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

        <!-- Scripts -->
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body class="antialiased overflow-x-hidden min-h-screen">
        @inertia
    </body>
</html>
