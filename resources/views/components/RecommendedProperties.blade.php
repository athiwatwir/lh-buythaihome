@props([
    'properties' => collect(),
    'viewAllUrl' => '#',
    'layout' => 'carousel',
])

@php
/** @var \Illuminate\Support\Collection<int, \App\Data\LoveThaiHome\PropertyData> $properties */
$propertySlides = $properties->count() > 1
    ? $properties->concat($properties)
    : $properties;
@endphp

@if ($properties->isNotEmpty())
@if ($layout === 'stack')
<aside>
    <div class="mb-4 flex items-end justify-between gap-2">
        <h2 class="heading-font text-lg font-bold text-blue-900 sm:text-xl">รายการทรัพย์แนะนำ</h2>
        <a href="{{ $viewAllUrl }}" class="flex shrink-0 items-center gap-1 text-sm font-medium text-blue-600 hover:underline">
            ดูทั้งหมด
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>

    <div class="flex flex-col gap-4">
        @foreach ($properties as $property)
        <x-property-card :property="$property" />
        @endforeach
    </div>
</aside>
@else
<section id="recommended-properties" class="scroll-mt-20 bg-gray-100 py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex items-end justify-between">
            <h2 class="text-2xl font-bold text-blue-900 md:text-3xl">รายการทรัพย์แนะนำ</h2>
            <a href="{{ $viewAllUrl }}" class="flex items-center gap-1 font-medium text-blue-600 hover:underline">
                ดูทั้งหมด
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div x-data="propertyCarousel()" @mouseenter="pause()" @mouseleave="play()" class="overflow-hidden">
            <div x-ref="scroller" class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
                @foreach ($propertySlides as $property)
                <div data-slide class="w-[calc((100%-1.5rem)/2)] flex-none snap-start lg:w-[calc((100%-4.5rem)/4)]">
                    <x-property-card :property="$property" :image-index="$loop->index" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
@endif
