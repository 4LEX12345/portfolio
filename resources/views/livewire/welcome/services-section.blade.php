<section class="py-16 scroll-mt-20" id="services">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-10 text-gray-800">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8" v-show="services">
            @forelse($data as $service)
            <!-- Service 2 -->
            <div class="p-8 rounded-xl bg-white rounded-xl  hover:scale-105 transition-transform duration-300 ">
                <div class="mb-4 flex justify-center">
                    @if($service->uri_type === 'lottie')
                    <dotlottie-player src="{{ $service->uri }}" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
                    @elseif($service->uri_type === 'image')
                    <img src="{{ Storage::url($service->uri) }}" alt="Tech Image" class="w-72 h-72 object-contain" />
                    @endif
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-black">{{ $service->name }}</h3>
                <p class="text-gray-600">{{ $service->description }}</p>
            </div>
            @empty
            <div class="col-span-2 text-center text-gray-400">
                🚀 No services yet. Please be patient!
            </div>
            @endforelse
        </div>
</section>