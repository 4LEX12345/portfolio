<nav x-data="{ open: false, activeTab : 'home' }"
    class="bg-white shadow-lg sticky top-0 z-50">
    <div class=" px-6 py-3 shadow-md h-[75px]">
        <div class="container mx-auto flex justify-between items-center md:w-[90%] w-full">
            <div class="flex items-center">
                <a href="/" wire:navigate class="flex items-baseline mr-[28px]">
                    <x-application-logo class="fill-current text-gray-500" />
                </a>
                <ul class="hidden md:flex space-x-6 text-black font-medium">
                    <li>
                        <a href="" class="mr-[15px] font-bold hover:text-primarybutton"
                            :class="activeTab == 'home' ? 'border-b-2 text-primarybutton border-primarybutton ' : 'text-black'"
                            @click="activeTab = 'home'">
                            Home</a>
                        <a href="#services" class="mr-[15px] font-bold hover:text-primarybutton"
                            :class="activeTab == 'services' ? 'border-b-2 text-primarybutton border-primarybutton ' : 'text-black'"
                            @click="activeTab = 'services'">Services</a>
                        <!-- <a href="#" class="mr-[15px] font-bold hover:text-primarybutton"
                            :class="activeTab == 'portfolio' ? 'border-b-2 text-primarybutton border-primarybutton ' : 'text-black'"
                            @click="activeTab = 'portfolio'">Portfolio</a> -->
                        <a href="#about-us" class="mr-[15px] font-bold hover:text-primarybutton"
                            :class="activeTab == 'aboutus' ? 'border-b-2 text-primarybutton border-primarybutton ' : 'text-black'"
                            @click="activeTab = 'aboutus'">About Us</a>
                        <a href="#contact-us" class="mr-[15px] font-bold hover:text-primarybutton"
                            :class="activeTab == 'contact-us' ? 'border-b-2 text-primarybutton border-primarybutton ' : 'text-black'"
                            @click="activeTab = 'contact-us'">Book a demo</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden text-black text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class=" md:hidden absolute left-0 w-full  bg-white shadow-md h-screen">
        <ul class="flex flex-col space-y-2  p-4">
            <li><a href="" class="block px-4 font-bold   py-2 text-gray-700  ">Home</a></li>
            <li><a href="#services" class="block px-4 font-bold py-2 text-gray-700  ">Services</a></li>
            <li><a href="#about-us" class="block px-4 font-bold py-2 text-gray-700  ">About Us</a>
            <li><a href="#contact-us" class="block px-4 font-bold py-2 text-gray-700  ">Book a demo</a>
            </li>
        </ul>
    </div>
</nav>