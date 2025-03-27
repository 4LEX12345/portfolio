<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME')}}</title>
    <link rel="icon" href="{{ asset('pcww-solutions-logo.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <!-- Latest Font Awesome CDN -->
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> --}}
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-space bg-slate-50 ">

    {{-- menu bar --}}
    <livewire:welcome.menu-bar></livewire:welcome.menu-bar>

    {{-- hero section --}}
    <livewire:welcome.hero-section></livewire:welcome.hero-section>

    {{-- technologies section --}}
    <livewire:welcome.technologies-section></livewire:welcome.technologies-section>

    {{-- services section --}}
    <livewire:welcome.services-section></livewire:welcome.services-section>

    {{-- new arrival section --}}
    {{-- <livewire:welcome.new-arrival-section></livewire:welcome.new-arrival-section> --}}

    {{-- why choose section --}}
    <livewire:welcome.why-choose-section></livewire:welcome.why-choose-section>

    {{-- contact-us section --}}
    <livewire:welcome.contact-us-section></livewire:welcome.contact-us-section>

    {{-- footer section --}}
    <livewire:welcome.footer-section>

</body>

</html>