<nav class="block md:flex md:flex-1 md:justify-end">
    @auth
    <a href="{{ url('/dashboard') }}"
        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
        Dashboard
    </a>
    @else
    <a href="{{ route('login') }}"
        class="rounded-[50px] w-[93px]  text-center md:px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] text-black bg-white font-bold">
        Log in
    </a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}"
        class="rounded-md md:px-3 font-bold ml-[15px] py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
        Sign Up
    </a>
    @endif
    @endauth
</nav>