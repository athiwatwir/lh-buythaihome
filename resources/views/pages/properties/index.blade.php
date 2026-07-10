@extends('layouts.home')

@push('head')
    <link rel="preconnect" href="https://office.lovethaihome.com" crossorigin>
@endpush

@section('content')
@php
$typeFilterBaseQuery = array_filter([
    'user_id' => $currentUser?->id,
    'is_recommend' => ($isRecommendFilter ?? false) ? 'Y' : null,
]);
@endphp

<div class="bg-gray-50 antialiased">
    <section class="border-b border-blue-100 bg-linear-to-r from-blue-800 to-blue-600 text-white">
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <nav class="mb-4 text-sm text-blue-100">
                <a href="{{ route('home') }}" class="hover:text-white">หน้าหลัก</a>
                <span class="mx-2">/</span>
                <span class="text-white">รายการทรัพย์สิน</span>
            </nav>

            <div class="flex flex-wrap items-start justify-between gap-4">
                <div>
                    <h1 class="heading-font text-2xl font-bold md:text-3xl">
                        @if ($isSearch ?? false)
                        ผลการค้นหาทรัพย์สิน
                        @elseif ($currentUser)
                        ทรัพย์ของ {{ $currentUser->fullName() }}
                        @elseif ($isRecommendFilter ?? false)
                        รายการทรัพย์แนะนำ
                        @elseif ($currentType)
                        {{ $currentType->name }}
                        @else
                        รายการทรัพย์สินทั้งหมด
                        @endif
                    </h1>

                    @if ($isSearch ?? false)
                    <p class="mt-2 text-blue-100">
                        @if (! empty($searchQuery['text']))
                        คำค้นหา: {{ $searchQuery['text'] }}
                        @else
                        ค้นหาตามเงื่อนไขที่เลือก
                        @endif
                    </p>
                    @endif

                    @if ($paginator)
                    <p class="mt-2 text-blue-100">
                        พบ {{ number_format($totalCount) }} รายการ
                        @if ($paginator->currentPage() > 1)
                        — หน้า {{ $paginator->currentPage() }} จาก {{ $paginator->lastPage() }}
                        @endif
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        @if ($isSearch ?? false)
        <div class="mb-8 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm md:p-6">
            <x-property-search-form :propertyTypes="$propertyTypes" />
        </div>

        @include('pages.properties.partials.results')
        @else
        <div class="flex flex-col gap-8 lg:flex-row lg:items-start">
            @if ($propertyTypes->isNotEmpty())
            <aside class="w-full shrink-0 lg:w-72 xl:w-80" x-data="{ typeModalOpen: false }" @keydown.escape.window="typeModalOpen = false">
                {{-- Mobile: type picker modal --}}
                <div class="lg:hidden">
                    <p class="mb-2 text-sm font-medium text-gray-700">ประเภททรัพย์</p>
                    <button
                        type="button"
                        @click="typeModalOpen = true"
                        class="flex w-full items-center gap-3 rounded-xl border border-gray-200 bg-white px-4 py-3 text-left shadow-sm transition hover:border-blue-300 hover:shadow-md"
                    >
                        @if ($currentType)
                        <span class="flex h-11 w-11 shrink-0 overflow-hidden rounded-lg border border-gray-200">
                            <img src="{{ $currentType->imageUrl ?? asset('images/cover/house.webp') }}" alt="" class="h-full w-full object-cover">
                        </span>
                        <span class="min-w-0 flex-1 font-medium text-gray-900">{{ $currentType->name }}</span>
                        @else
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-700">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </span>
                        <span class="min-w-0 flex-1 font-medium text-gray-900">ทั้งหมด</span>
                        @endif
                        <svg class="h-5 w-5 shrink-0 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        x-show="typeModalOpen"
                        x-cloak
                        class="fixed inset-0 z-[100] flex items-end justify-center sm:items-center sm:p-4"
                        role="dialog"
                        aria-modal="true"
                        aria-labelledby="type-modal-title"
                    >
                        <div
                            x-show="typeModalOpen"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="absolute inset-0 bg-blue-950/60 backdrop-blur-sm"
                            aria-hidden="true"
                            @click="typeModalOpen = false"
                        ></div>

                        <div
                            x-show="typeModalOpen"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-8 sm:translate-y-4 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-8 sm:translate-y-4 sm:scale-95"
                            class="relative z-10 flex max-h-[min(90vh,42rem)] w-full max-w-lg flex-col overflow-hidden rounded-t-2xl border border-white/20 bg-white shadow-2xl sm:rounded-2xl"
                            @click.outside="typeModalOpen = false"
                        >
                            <div class="relative shrink-0 border-b border-gray-100 bg-linear-to-r from-blue-800 to-blue-600 px-5 py-4 text-white">
                                <button
                                    type="button"
                                    @click="typeModalOpen = false"
                                    class="absolute right-3 top-3 rounded-lg p-1.5 text-white/80 transition hover:bg-white/10 hover:text-white"
                                    aria-label="ปิด"
                                >
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <h2 id="type-modal-title" class="heading-font pr-8 text-lg font-bold">เลือกประเภททรัพย์</h2>
                                <p class="mt-0.5 text-sm text-blue-100">แตะเพื่อกรองรายการทรัพย์สิน</p>
                            </div>

                            <div class="overflow-y-auto p-4 pb-[max(1rem,env(safe-area-inset-bottom))]">
                                <div class="grid grid-cols-2 gap-3">
                                    <a
                                        href="{{ route('properties.index', $typeFilterBaseQuery) }}"
                                        @class([
                                            'flex flex-col items-center rounded-2xl border-2 p-3 text-center transition',
                                            'border-blue-700 bg-blue-50 ring-2 ring-blue-700/20' => ! $currentType,
                                            'border-gray-200 bg-white hover:border-blue-300 hover:bg-blue-50/50' => $currentType,
                                        ])
                                    >
                                        <span @class([
                                            'mb-2 flex h-14 w-14 items-center justify-center rounded-full',
                                            'bg-blue-700 text-white' => ! $currentType,
                                            'bg-blue-100 text-blue-700' => $currentType,
                                        ])>
                                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                            </svg>
                                        </span>
                                        <span class="text-xs font-semibold leading-tight text-gray-800">ทั้งหมด</span>
                                    </a>

                                    @foreach ($propertyTypes as $type)
                                    <a
                                        href="{{ route('properties.index', array_merge($typeFilterBaseQuery, ['asset_type_id' => $type->id])) }}"
                                        @class([
                                            'flex flex-col items-center rounded-2xl border-2 p-3 text-center transition',
                                            'border-blue-700 bg-blue-50 ring-2 ring-blue-700/20' => $currentType?->id === $type->id,
                                            'border-gray-200 bg-white hover:border-blue-300 hover:bg-blue-50/50' => $currentType?->id !== $type->id,
                                        ])
                                    >
                                        <span class="mb-2 h-14 w-14 overflow-hidden rounded-full border-2 border-white shadow-md">
                                            <img
                                                src="{{ $type->imageUrl ?? asset('images/cover/house.webp') }}"
                                                alt=""
                                                class="h-full w-full object-cover"
                                                loading="lazy"
                                            >
                                        </span>
                                        <span class="text-xs font-semibold leading-tight text-gray-800 line-clamp-2">{{ $type->name }}</span>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Desktop: left sidebar --}}
                <nav class="hidden lg:block lg:sticky lg:top-24 rounded-2xl border border-gray-200 bg-white p-3 shadow-sm" aria-label="ประเภททรัพย์">
                    <p class="heading-font px-3 pb-3 text-sm font-bold uppercase tracking-wide text-blue-900">ประเภททรัพย์</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('properties.index', $typeFilterBaseQuery) }}" @class([
                                'group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium transition',
                                'bg-blue-700 text-white shadow-sm' => ! $currentType,
                                'text-gray-700 hover:bg-blue-50 hover:text-blue-800' => $currentType,
                            ])>
                                <span @class([
                                    'flex h-10 w-10 shrink-0 items-center justify-center rounded-lg transition',
                                    'bg-white/15 text-white' => ! $currentType,
                                    'bg-blue-50 text-blue-700 group-hover:bg-blue-100' => $currentType,
                                ])>
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </span>
                                <span class="min-w-0 leading-snug">ทั้งหมด</span>
                            </a>
                        </li>
                        @foreach ($propertyTypes as $type)
                        <li>
                            <a href="{{ route('properties.index', array_merge($typeFilterBaseQuery, ['asset_type_id' => $type->id])) }}" @class([
                                'group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium transition',
                                'bg-blue-700 text-white shadow-sm' => $currentType?->id === $type->id,
                                'text-gray-700 hover:bg-blue-50 hover:text-blue-800' => $currentType?->id !== $type->id,
                            ])>
                                <span @class([
                                    'flex h-10 w-10 shrink-0 overflow-hidden rounded-lg border transition',
                                    'border-white/20' => $currentType?->id === $type->id,
                                    'border-gray-200 bg-gray-50 group-hover:border-blue-200' => $currentType?->id !== $type->id,
                                ])>
                                    <img
                                        src="{{ $type->imageUrl ?? asset('images/cover/house.webp') }}"
                                        alt=""
                                        class="h-full w-full object-cover"
                                        loading="lazy"
                                    >
                                </span>
                                <span class="min-w-0 leading-snug">{{ $type->name }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </aside>
            @endif

            <div class="min-w-0 flex-1">
                @include('pages.properties.partials.results')
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
