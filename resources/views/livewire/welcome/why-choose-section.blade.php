<div class=" bg-[#F3F5F6]  md:mt-[50px] mt-[25px] scroll-mt-20 " id="about-us">
    <div class="container mx-auto  py-[50px] md:w-[90%] m-auto">
        <div class="flex items-baseline justify-center">
            <h1 class="font-bold md:text-[31px] text-[20px] flex text-black ">Why Choose PrimeCode Webworks?
            </h1>
        </div>
        <div class="content md:mt-[20px] mt-[20px]  m-auto">
            <div class="content md:mt-[20px] mt-[20px]">
                <div class="relative w-full  mx-auto overflow-hidden">
                    <div class="md:flex flex-wrap">
                        @forelse($data as $item)
                        <div class="lg:w-1/4 md:w-2/4  w-full flex-shrink-0 p-5 md:p-2 ">
                            <div class="bg-white rounded-xl  text-center p-7">
                                <i class="{{ $item->icon }} text-primarybutton text-3xl"></i>
                                <div class="price  text-center font-semibold text-lg mt-4">
                                    {{ $item->name }}
                                </div>
                                <ul class="text-start md:px-7 py-5 text-sm text-slate-500 ">
                                    @forelse($item->WhyChooseUsDetails as $detail)
                                    <li><span class="text-primarybutton">✔</span>{{ $detail->description}}</li>
                                    @empty
                                    <div class="w-full text-center text-gray-400">
                                        🚀 No content yet
                                    </div>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        @empty
                        <div class="w-full text-center text-gray-400">
                            🚀 No content yet. Please be patient!
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>