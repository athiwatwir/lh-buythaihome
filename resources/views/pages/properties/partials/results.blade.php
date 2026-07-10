@if ($apiError)
<div class="rounded-xl border border-red-200 bg-red-50 px-4 py-6 text-center text-red-700">
    {{ $apiError }}
</div>
@elseif ($properties->isEmpty())
<div class="rounded-2xl border border-dashed border-gray-300 bg-white px-6 py-16 text-center">
    <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
    </svg>
    <p class="mt-4 text-lg font-medium text-gray-700">ไม่พบทรัพย์สินตามเงื่อนไขที่ค้นหา</p>
    <a href="{{ route('home') }}" class="mt-4 inline-block text-blue-700 hover:underline">กลับหน้าหลัก</a>
</div>
@else
<div x-data="propertyProgressiveReveal({ batchSize: 4 })" x-cloak>
    <div x-ref="grid" id="properties-grid" class="grid grid-cols-2 gap-6 sm:grid-cols-2 xl:grid-cols-3">
        @foreach ($properties as $property)
        <div data-property-card x-show="isVisible({{ $loop->index }})" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
            <x-property-card :property="$property" :image-index="$loop->index" />
        </div>
        @endforeach
    </div>

    <div x-show="loading && visibleCount < total" class="mt-8 flex items-center justify-center gap-3 text-sm text-gray-500">
        <svg class="h-5 w-5 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24" aria-hidden="true">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        กำลังแสดงทรัพย์เพิ่ม...
    </div>

    @if ($paginator && $paginator->hasPages())
    <div class="mt-10 w-full max-w-full overflow-hidden">
        {{ $paginator->onEachSide(0)->links('vendor.pagination.properties') }}
    </div>
    @endif
</div>
@endif
