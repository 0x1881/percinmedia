@props(['header' => true, 'footer' => true, 'style2' => false, 'headerLogo3' => false])
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $meta['title'] }}</title>

    <!-- Meta Data -->
    <meta name="description" content="{{ $meta['description'] }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ request()->url() }}"/>

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    @stack('custom_styles')
</head>
<body>

<main style="width: 100%;">
    @includeWhen($header, 'partials.header', ['style2' => $style2, 'headerLogo3' => $headerLogo3])
    <div style="flex: 1; overflow-y: auto; overflow-x: hidden">
        {{ $slot }}
    </div>
    @includeWhen($footer, 'partials.footer')
</main>

<script src="/assets/js/jquery-3.7.1.min.js"></script>
<script src="/assets/js/viewport.jquery.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.nice-select.min.js"></script>
<script src="/assets/js/jquery.waypoints.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/jquery.meanmenu.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/circle-progress.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>
