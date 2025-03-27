<x-app-layout>
    <x-slot name="header">
        <!-- Welcome Message -->
        <div class=" text-black p-6  ">
            <h2 class="text-2xl font-bold">Let's manage your website, <span class="uppercase">{{ Auth()->user()->name}}!</span></h2>
            <p class="mt-2"> This were all starts!</p>
        </div>
    </x-slot>

    <div class="py-2 "
        x-data="
        { 
            nav :  sessionStorage.getItem('tab') || 'hero',
            setTab(tab){
                this.nav = tab;
                sessionStorage.setItem('tab', tab);
            }
        }">
        <div class="flex">
            <aside class="w-64 flex flex-col border">
                <nav class="flex-1 px-4 py-6 space-y-4">
                    <a href="#"
                        :class="nav == 'hero' ? 'border-b-2  text-primarybutton border-primarybutton ' : 'text-black'"
                        @click.prevent="setTab('hero')"
                        class="flex items-center space-x-3 py-1 text-gray-700 hover:text-primarybutton font-medium transition">
                        <span>Hero Section</span>
                    </a>
                    <a href="#"
                        :class="nav == 'techstack' ? 'border-b-2 text-primarybutton border-primarybutton ' : 'text-black'"
                        @click.prevent="setTab('techstack')"
                        class="flex items-center space-x-3 py-1 text-gray-700 hover:text-primarybutton font-medium transition">
                        <span>Technology Stack</span>
                    </a>
                    <a href="#"
                        :class="nav == 'services' ? 'border-b-2 text-primarybutton border-primarybutton ' : 'text-black'"
                        @click.prevent="setTab('services')"
                        class="flex items-center space-x-3 py-1 text-gray-700 hover:text-primarybutton font-medium transition">
                        <span>Services</span>
                    </a>
                    <a href="#"
                        :class="nav == 'why-choose' ? 'border-b-2  text-primarybutton border-primarybutton ' : 'text-black'"
                        @click.prevent="setTab('why-choose')"
                        class="flex items-center space-x-3 py-1 text-gray-700 hover:text-primarybutton font-medium transition">
                        <span>Why Choose Primecode</span>
                    </a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-6 border">
                <div x-show="nav == 'hero'" x-cloak>
                    <livewire:managewebsite.manage-hero-section></livewire:managewebsite.manage-hero-section>
                </div>
                <div x-show="nav == 'techstack'" x-cloak>
                    <livewire:managewebsite.manage-technology-stack></livewire:managewebsite.manage-technology-stack>
                </div>
                <div x-show="nav == 'services'" x-cloak>
                    <livewire:managewebsite.manage-services></livewire:managewebsite.manage-services>
                </div>
                <div x-show="nav == 'why-choose'" x-cloak>
                    <livewire:managewebsite.manage-why-choose-us></livewire:managewebsite.manage-why-choose-us>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>