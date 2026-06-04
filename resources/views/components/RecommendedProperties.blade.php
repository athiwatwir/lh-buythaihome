@props([
'viewAllUrl' => '#',
'properties' => [
['title' => 'บ้านพร้อมอยู่ คลองหลวง', 'price' => '2,890,000', 'img' => 'https://images.unsplash.com/photo-1583608205776-bfd35f0d9f83?auto=format&fit=crop&w=400&q=80'],
['title' => 'บ้านเดี่ยว พูลวิลล่า', 'price' => '1,790,000', 'img' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=400&q=80'],
['title' => '650,วด้วน', 'price' => '650,000', 'img' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=400&q=80'],
['title' => 'ทาวน์โฮม 2 ชั้น หมู่บ้านพฤกษา', 'price' => '3,590,000', 'img' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=400&q=80'],
['title' => 'ทาวน์โฮม 2 ชั้น หมู่บ้านพฤกษา', 'price' => '3,590,000', 'img' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=400&q=80'],
['title' => 'ทาวน์โฮม 2 ชั้น หมู่บ้านพฤกษา', 'price' => '3,590,000', 'img' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=400&q=80'],
['title' => 'ทาวน์โฮม 2 ชั้น หมู่บ้านพฤกษา', 'price' => '3,590,000', 'img' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=400&q=80'],
],
])

@php
$propertySlides = array_merge($properties, $properties);
@endphp

<section id="recommended-properties" class="bg-gray-100 py-8 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-blue-900">รายการทรัพย์แนะนำ</h2>
            <a href="{{ $viewAllUrl }}" class="text-blue-600 font-medium hover:underline flex items-center gap-1">
                ดูทั้งหมด
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div x-data="propertyCarousel()" @mouseenter="pause()" @mouseleave="play()" class="overflow-hidden">
            <div x-ref="scroller" class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
                @foreach($propertySlides as $item)
                <div data-slide class="flex-none snap-start w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]">
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 border border-gray-200 cursor-pointer group h-full">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 md:p-5">
                            <h3 class="text-gray-800 font-medium mb-1 md:mb-3 truncate">{{ $item['title'] }}</h3>
                            <p class="text-blue-600 font-bold text-sm md:text-xl heading-font">{{ $item['price'] }} <span class="text-sm font-normal">บาท</span></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
