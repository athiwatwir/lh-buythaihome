@extends('layouts.home')

@section('content')

<div class="antialiased">
    <section id="consignment" class="relative w-full h-[400px] md:h-[500px] bg-cover bg-center flex md:items-center scroll-mt-20" style="background-image: url('{{ asset('images/house-01.png') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-white/70 via-white/40 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-bold text-blue-900 leading-tight mb-4">
                    ทรัพย์สินราคาถูก <br>
                    <span class="text-blue-800">ขายต่ำกว่าตลาด</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-700 mb-8 font-medium heading-font">
                    ให้คำปรึกษา ในช่องการตั้งราคาขาย <br>
                    ที่เหมาะสม โดยผู้เชี่ยวชาญ
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-4 md:px-8 py-2 md:py-3 focus:outline-none transition heading-font">
                        รับฝากขายบ้าน-ที่ดิน
                    </a>
                    <a href="#" class="text-blue-900 bg-white border border-blue-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-base px-4 md:px-8 py-2 md:py-3 focus:outline-none transition heading-font">
                        ดูทรัพย์ทั้งหมด
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 -mt-16 mb-8">
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 border border-gray-100">

            <div class="flex items-center gap-2 mb-6 text-blue-700 font-semibold text-lg heading-font">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                ค้นหาทรัพย์สิน
            </div>

            <form action="#" method="GET">
                <div class="flex mb-6">
                    <div class="relative w-full">
                        <input type="search" id="search" class="block p-3.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="ค้นหา ประเภททรัพย์, โซน, ทำเล, ราคา, ขนาด, และคำค้นอื่นๆ" required>
                        <button type="submit" class="absolute top-0 end-0 h-full p-3.5 text-sm font-medium text-white bg-blue-600 rounded-e-lg border border-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" /></svg>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 items-end">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-500">ประเภททรัพย์</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option>ทั้งหมด</option>
                            <option>บ้านเดี่ยว</option>
                            <option>ทาวน์โฮม</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-500">จังหวัด</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option>ทั้งหมด</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-500">เขต</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option>ทั้งหมด</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-500">แขวง</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option>ทั้งหมด</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-500">ช่วงราคา</label>
                        <div class="flex items-center gap-2">
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option>ขั้นต่ำ</option>
                            </select>
                            <span class="text-gray-400">-</span>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option>สูงสุด</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 focus:outline-none">
                            ค้นหา
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-blue-900 mb-4">ประเภททรัพย์สิน</h2>

        <div class="grid grid-cols-3 lg:grid-cols-8 gap-4 lg:gap-6">
            @php
            $types = [
            ['name' => 'บ้านเดี่ยว', 'img' => asset('images/cover/house.webp')],
            ['name' => 'บ้านแฝด/ทาวน์เฮ้าส์/ทาวน์โฮม', 'img' => asset('images/cover/townhome.webp')],
            ['name' => 'ที่ดิน', 'img' => asset('images/cover/land.webp')],
            ['name' => 'คอนโดมิเนียม', 'img' => asset('images/cover/condo.webp')],
            ['name' => 'อาคารพาณิชย์', 'img' => asset('images/cover/commercial-building.webp')],
            ['name' => 'โกดัง', 'img' => asset('images/cover/warehouse.webp')],
            ['name' => 'โรงงาน', 'img' => asset('images/cover/factory.webp')],
            ['name' => 'อสังหาริมทรัพย์ที่ดินเช่า', 'img' => asset('images/cover/land-02.webp')],
            ];
            @endphp

            @foreach($types as $type)
            <a href="#" class="flex flex-col items-center group w-full">
                <div class="w-full aspect-square rounded-full overflow-hidden border-4 border-white shadow-lg mb-2 group-hover:scale-105 transition-transform duration-300">
                    <img src="{{ $type['img'] }}" alt="{{ $type['name'] }}" class="w-full h-full object-cover">
                </div>
                <span class="text-xs sm:text-sm text-center text-gray-700 font-medium group-hover:text-blue-600 leading-tight">
                    {{ $type['name'] }}
                </span>
            </a>
            @endforeach
        </div>
    </section>

    <x-RecommendedProperties />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-blue-900 mb-4">วิดีโอจากยูทูป</h2>

        @php
        $videos = [
            ['title' => 'รับสมัครงาน', 'img' => 'https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=400&q=80'],
            ['title' => 'ฝากขายกับเอสที', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80'],
            ['title' => 'สอบถามประสบการณ์', 'img' => 'https://images.unsplash.com/photo-1573164574048-f968d7ee9f20?auto=format&fit=crop&w=400&q=80'],
            ['title' => 'แนะนำจากการเจ้าของ', 'img' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=400&q=80'],
        ];
        $videoSlides = array_merge($videos, $videos);
        @endphp

        <div x-data="propertyCarousel()" @mouseenter="pause()" @mouseleave="play()" class="overflow-hidden">
            <div x-ref="scroller" class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
                @foreach($videoSlides as $video)
                <div data-slide class="flex-none snap-start w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]">
                    <div class="group cursor-pointer">
                        <div class="relative rounded-2xl overflow-hidden shadow-sm aspect-video mb-3">
                            <img src="{{ $video['img'] }}" alt="{{ $video['title'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center shadow-lg group-hover:bg-red-700 transition">
                                    <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-center font-medium text-blue-900 line-clamp-2">{{ $video['title'] }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-blue-500 to-blue-400 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white divide-x divide-blue-400/50">
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">8+</div>
                    <div class="text-blue-100 font-medium">ประสบการณ์</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">5,000+</div>
                    <div class="text-blue-100 font-medium">ทรัพย์ที่ดูแล</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">3,000+</div>
                    <div class="text-blue-100 font-medium">ลูกค้าไว้วางใจ</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">100%</div>
                    <div class="text-blue-100 font-medium">บริการด้วยใจ</div>
                </div>
            </div>
        </div>
    </section>



</div>

@endsection
