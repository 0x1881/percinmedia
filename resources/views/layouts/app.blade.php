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
    <style>
        .sharedComponents .sharedComponents-whatsapps {
            position: fixed;
            bottom: 25px;
            right: 80px;
            z-index: 9999
        }

        .sharedComponents .sharedComponents-whatsapps .sharedComponents-whatsapp {
            display: block;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, .1);
            text-align: center;
            line-height: 60px;
            color: #fff;
            text-decoration: none;
            animation: wpAnimation 2s infinite alternate
        }

        @keyframes wpAnimation {
            0% {
                transform: scale(1)
            }

            to {
                transform: scale(.5)
            }
        }
    </style>
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
@stack('custom_scripts')

<div class="sharedComponents">
    <a rel="external noopener nofollow noreferer" title="whatsapp link"
       href="https://wa.me/+905010063434?text=Merhaba+PerçinMedia"
       target="_blank" class="sharedComponents-whatsapps">
        <div class="sharedComponents-whatsapp">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"></path>
            </svg>
        </div>
    </a>
</div>
</body>
</html>
