<section class="hero md:h-[578px] h-[300px] relative overflow-hidden" x-data="{ show : false}"
    x-init="setTimeout(() => show = true, 100)" id="hero-section">
    <div class="hero-cover">
        <!-- <img src="{{ asset('hero-bg.png')}}" alt="" class="w-full md:h-[578px] h-[300px] object-cover  absolute"> -->
        <!-- <div class="absolute inset-0 bg-[#000000] bg-opacity-80"></div> -->
    </div>

    <div class="md:flex items-center  justify-between container m-auto p-5 md:p-0  pt-[20px] md:h-[578px] h-[300px] md:w-[90%]">
        <div>
            <h1 class="text-black md:text-5xl font-bold text-5xl mt-5 md:mt-0 text-center md:text-left" x-show="show" x-transition.opacity.duration.3000ms
                x-cloak>
                {{ $header }}
            </h1>
            <h4 class="text-black mt-2 font-normal text-[10px] md:text-[20px] text-center md:text-left" x-show="show"
                x-transition.opacity.duration.4000ms x-cloak>
                <i>{{ $sub_header }}</i>
            </h4>
            <div class="mt-5 text-center md:text-left">
                <a href="#contact-us"><x-primary-button class="w-60 text-center my-2 md:text-md text-sm">
                        Book a Demo
                    </x-primary-button></a>

                <x-secondary-button class="w-60 text-center my-2 md:text-md text-sm">
                    Explore Projects
                </x-secondary-button>
            </div>

        </div>
        <dotlottie-player class="hidden md:block" src="https://lottie.host/8c78c790-e4e3-4ee2-9989-97d462c70533/QSdE2ZIdYF.lottie" background="transparent" speed="0.5" style="width: 700px; height: 500px" loop autoplay></dotlottie-player>
    </div>
</section>
<script>
    function dropdown() {
        return {
            open: false,
            search: '',
            selected: '',
            options: [
                'All', 'Affenpinscher', 'Afghan Hound', 'Airedale Terrier', 'Akita', 'Alaskan Klee Kai'
            ],
            get filteredOptions() {
                return this.options.filter(option =>
                    option.toLowerCase().includes(this.search.toLowerCase())
                );
            },
            selectOption(option) {
                this.search = option;
                this.open = false;
            }
        }
    }
</script>