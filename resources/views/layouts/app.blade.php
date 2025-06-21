@props(['header' => true, 'footer' => true])
    <!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $meta['title'] }}</title>

    <!-- Meta Data -->
    <meta name="description" content="{{ $meta['title'] }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ request()->url() }}"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/main.css') }}">

    @stack('custom_styles')
</head>
<body>

@includeWhen($header, 'partials.header')
{{ $slot }}
@includeWhen($footer, 'partials.footer')

<script src="{{ Vite::asset('resources/assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/viewport.jquery.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/jquery.waypoints.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/wow.min.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/circle-progress.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/main.js') }}"></script>

</body>
</html>
