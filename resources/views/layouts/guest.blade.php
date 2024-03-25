<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="relative h-full overflow-x-hidden scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="manifest" href="asset('build/manifest.json')"> --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{-- Tailwind --}}
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-BzrsHoCQ.css') }}">
    <script src="{{ asset('build/assets/app-D2jpX1vH.js') }}"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>{{ $title != null ? $title . ' | ' . config('app.name') : config('app.name') }}</title>
</head>

<body class="relative bg-zinc-950 font-poppins text-slate-200">
    {{ $slot }}
</body>

</html>
