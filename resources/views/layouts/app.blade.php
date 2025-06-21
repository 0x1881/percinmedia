@props(['header' => true, 'footer' => true])
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8"/>
    <title>{{ $meta['title'] }}</title>

    <!-- Meta Data -->
    <meta name="description" content="{{ $meta['title'] }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ request()->url() }}" />

    <!-- Styles -->
    @vite('resources/scss/app.scss')

    @stack('custom_styles')
</head>
<body>

@includeWhen($header, 'partials.header')

{{ $slot }}

@includeWhen($footer, 'partials.footer')

@vite('resources/js/app.js')

</body>
</html>
