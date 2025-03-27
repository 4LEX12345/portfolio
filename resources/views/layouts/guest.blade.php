<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME')}}</title>
    <link rel="icon" href="{{ asset('pcww-solutions-logo.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-quicksand antialiased">
    <div class="min-h-screen flex  sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r  from-slate-100 to-green-50"
        x-data=" { open : false
        }" x-init="setTimeout(() => open = true, 300)">
        <div class="w-full m-5  md:max-w-7xl  mt-6 bg-white shadow-lg overflow-hidden sm:rounded-lg">
            <div class="md:grid grid-cols-2 gap-2">
                <div class="w-full m-auto">
                    <div class=" md:px-[90px] md:py-[100px] p-3">
                        {{-- <div class=" flex justify-center mb-1">
                            <a href="/" wire:navigate>
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </div> --}}
                        {{ $slot }}
                    </div>
                </div>
                <div class="bg-primaryColor rounded-tr-lg rounded-tb-lg ">
                    <div class="mt-5 mb-2">
                        <a href="/" wire:navigate>
                            <h1 class="text-center font-bold  text-5xl my-3 mt-10 text-white">FurPlace</h1>
                        </a>
                        <h1 class="font-bold text-center text-white text-lg italic"> <i> Find Your Perfect Pet
                                Companion 🐾</i>
                    </div>
                    </h1>
                    <dotlottie-player class="m-auto" x-show="open" x-transition.opacity.duration.500ms x-cloak
                        src="https://lottie.host/c3688a0b-bed7-47e9-98cb-c01b4a39e751/DJEnCnUvDl.lottie"
                        background="transparent" speed="1" style="width: 300px; height: 300px" direction="1"
                        playMode="forward" loop autoplay></dotlottie-player>
                </div>
            </div>
        </div>
    </div>
</body>

</html>