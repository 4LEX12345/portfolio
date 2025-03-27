<div class=" bg-slate-50 md:mt-[50px] mt-[25px] scroll-mt-20" id="contact-us">
    <div class="container mx-auto  py-[20px] md:w-[90%] m-auto">
        <div class="md:p-0 p-5">
            <h1 class="font-bold  text-2xl flex text-black ">Let's start making a difference! </h1>
            <p class="text-gray-600 text-md">Get in touch to discuss your project, request a quote, or just say hello.</p>

            <div class="form md:flex justify-between ">
                <div id="contact-us-section" class="max-w-xl mt-7 md:w-[50%]">
                    @if($success)
                    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                        Your message has been sent!
                    </div>
                    @endif
                    <form wire:submit.prevent="submit">
                        <div class="mb-4">
                            <label class="block mb-1 text-sm">Name</label>
                            <x-text-input type="text" wire:model="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"></x-text-input>
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm">Email</label>
                            <x-text-input type="email" wire:model="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"></x-text-input>
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm">Schedule Date</label>
                            <x-text-input type="date" wire:model="date" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"></x-text-input>
                            @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm">Message</label>
                            <x-text-area wire:model="message" rows="4" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"></x-text-input>
                                @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <x-primary-button type="submit" class="w-full">Send Message</x-primary-button>
                    </form>
                </div>
                <div class="md:w-[50%] grid justify-items-stretch">
                    <div>
                        <dotlottie-player class=" hidden md:block justify-self-end" src="https://lottie.host/422e9f43-61bf-4684-a705-2747ab28c871/uh30oXcDF4.lottie" background="transparent" speed="1" style="width: 700px; height: 500px" loop autoplay aria-hidden="true"></dotlottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>