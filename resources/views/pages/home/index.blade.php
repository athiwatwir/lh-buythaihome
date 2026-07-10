@extends('layouts.home')

@section('content')

<div class="antialiased">
    <section id="consignment" class="relative w-full h-[400px] md:h-[500px] bg-cover bg-center flex md:items-center scroll-mt-20" style="background-image: url('{{ asset('images/house-01.webp') }}');">
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
                    <a href="{{ route('property-requests.index') }}" class="group relative inline-flex items-center gap-2.5 overflow-hidden rounded-xl bg-blue-600 px-4 py-2.5 text-base font-medium text-white shadow-lg shadow-blue-600/30 transition duration-300 heading-font hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl hover:shadow-blue-600/40 active:translate-y-0 md:px-8 md:py-3 focus:outline-none focus:ring-4 focus:ring-blue-300 hero-cta-enter hero-cta-primary-glow">
                        <span class="pointer-events-none absolute inset-0 -translate-x-full bg-linear-to-r from-transparent via-white/25 to-transparent transition-transform duration-700 group-hover:translate-x-full" aria-hidden="true"></span>
                        <span class="relative flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/15 transition group-hover:scale-110 group-hover:bg-white/20">
                            <svg class="h-5 w-5 animate-cta-wiggle" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                        <span class="relative">รับฝากขายบ้าน-ที่ดิน</span>
                    </a>
                    <a href="{{ route('properties.index') }}" class="group relative inline-flex items-center gap-2.5 overflow-hidden rounded-xl border-2 border-blue-900 bg-white px-4 py-2.5 text-base font-medium text-blue-900 shadow-sm transition duration-300 heading-font hover:-translate-y-0.5 hover:border-blue-700 hover:bg-blue-50 hover:shadow-md active:translate-y-0 md:px-8 md:py-3 focus:outline-none focus:ring-4 focus:ring-gray-200 hero-cta-enter hero-cta-enter-delay">
                        <span class="pointer-events-none absolute inset-0 -translate-x-full bg-linear-to-r from-transparent via-blue-100/80 to-transparent transition-transform duration-700 group-hover:translate-x-full" aria-hidden="true"></span>
                        <span class="relative flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-700 transition group-hover:scale-110 group-hover:bg-blue-100">
                            <svg class="h-5 w-5 transition group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <span class="relative">ดูทรัพย์ทั้งหมด</span>
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

            <x-property-search-form :propertyTypes="$propertyTypes" />
        </div>
    </section>


    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-blue-900 mb-4">ประเภททรัพย์สิน</h2>

        <div class="grid grid-cols-3 lg:grid-cols-7 gap-4 lg:gap-6">
            @forelse ($propertyTypes as $type)
            <a href="{{ route('properties.index', ['asset_type_id' => $type->id]) }}" class="flex flex-col items-center group w-full">
                <div class="w-full aspect-square rounded-full overflow-hidden border-4 border-white shadow-lg mb-2 group-hover:scale-105 transition-transform duration-300">
                    <x-lazy-image :src="$type->imageUrl ?? asset('images/cover/house.webp')" :alt="$type->name" class="w-full h-full object-cover" />
                </div>
                <span class="text-xs sm:text-sm text-center text-gray-700 font-medium group-hover:text-blue-600 leading-tight">
                    {{ $type->name }}
                </span>
            </a>
            @empty
            @endforelse
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mx-auto w-full max-w-3xl">
            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-black shadow-sm">
                <div class="relative aspect-video w-full">
                    <iframe
                        class="absolute inset-0 h-full w-full border-0"
                        src="https://www.youtube.com/embed/p7ZYIRII3FM"
                        title="วิดีโอแนะนำ"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>

    <x-RecommendedProperties :properties="$recommendedProperties" :view-all-url="route('properties.index', ['is_recommend' => 'Y'])" />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-blue-900 mb-4">วิดีโอจากยูทูป</h2>

        @php
        $videos = [
            [
                'title' => 'รับสมัครงาน',
                'url' => 'https://www.youtube.com/watch?v=jBHaD0A9RvE',
                'img' => 'https://img.youtube.com/vi/jBHaD0A9RvE/hqdefault.jpg',
            ],
            [
                'title' => 'ความรู้เกี่ยวกับอสังหาฯ',
                'url' => null,
                'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'title' => 'ระบบการทำงานของเรา',
                'url' => null,
                'img' => 'https://images.unsplash.com/photo-1573164574048-f968d7ee9f20?auto=format&fit=crop&w=400&q=80',
            ],
        ];
        @endphp

        <div class="grid grid-cols-3 gap-4 md:gap-6">
            @foreach ($videos as $video)
            @if (! empty($video['url']))
            <a href="{{ $video['url'] }}" target="_blank" rel="noopener noreferrer" class="group block">
            @else
            <div class="group cursor-pointer">
            @endif
                <div class="relative mb-3 aspect-video overflow-hidden rounded-2xl shadow-sm">
                    <img src="{{ $video['img'] }}" alt="{{ $video['title'] }}" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/20 transition group-hover:bg-black/10"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-red-600 shadow-lg transition group-hover:bg-red-700 md:h-12 md:w-12">
                            <svg class="ml-0.5 h-5 w-5 text-white md:h-6 md:w-6" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="line-clamp-2 text-center text-xs font-medium text-blue-900 sm:text-sm md:text-base">{{ $video['title'] }}</h3>
            @if (! empty($video['url']))
            </a>
            @else
            </div>
            @endif
            @endforeach
        </div>
    </section>

</div>

@endsection
