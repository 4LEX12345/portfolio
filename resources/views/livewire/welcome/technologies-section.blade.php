<div class="   md:mt-[50px] mt-[25px] scroll-mt-20 ">
    <div class="container mx-auto  py-[50px] md:w-[90%] m-auto">
        <div class="flex items-baseline justify-center">
            <h1 class="font-bold md:text-[31px] text-[20px] flex text-black ">Tech Stack? We've got you covered!
            </h1>
        </div>

        <div class="mt-5">
            <div class="whitespace-nowrap flex space-x-8 px-4 flex-wrap justify-center">
                @forelse($technologies as $tech)
                <span class="md:text-6xl/10    md:p-4 p-2 font-bold text-gray-400">{{ $tech->technology}}</span>
                @empty
                <div class="col-span-2 text-center text-gray-400">
                    🚀 No tech stack yet. Please be patient!
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>