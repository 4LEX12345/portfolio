<x-app-layout>
    <x-slot name="header">
        <!-- Welcome Message -->
        <div class=" text-black p-6  ">
            <h2 class="text-2xl font-bold">Welcome to PrimeCode, <span class="uppercase">{{ Auth()->user()->name}}!</span></h2>
            <p class="mt-2">Let's start making difference!</p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto p-6">
        </div>
    </div>
</x-app-layout>