@extends('layouts.home')

@section('content')
<div class="bg-gray-50 antialiased">
    <section class="relative overflow-hidden border-b border-blue-100 bg-linear-to-br from-blue-900 via-blue-800 to-blue-600 text-white">
        <div class="pointer-events-none absolute inset-0 opacity-30" aria-hidden="true">
            <div class="absolute -right-16 -top-20 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>
            <div class="absolute -bottom-24 left-10 h-80 w-80 rounded-full bg-sky-300/20 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-14 lg:px-8">
            <nav class="mb-4 text-sm text-blue-100">
                <a href="{{ route('home') }}" class="hover:text-white">หน้าหลัก</a>
                <span class="mx-2">/</span>
                <span class="text-white">ติดต่อเรา</span>
            </nav>

            <p class="text-sm font-semibold tracking-wide text-blue-200">บริษัท เลิฟไทยโฮม จำกัด</p>
            <h1 class="heading-font mt-2 max-w-2xl text-3xl font-bold leading-tight md:text-4xl lg:text-5xl">
                พร้อมให้คำปรึกษา<br class="hidden sm:block"> ทุกเรื่องอสังหาริมทรัพย์
            </h1>
            <p class="mt-4 max-w-xl text-base text-blue-100 md:text-lg">
                โทร แชท LINE หรือ Messenger ได้เลย ทีมงานยินดีดูแลฟรี ไม่มีค่าใช้จ่าย
            </p>
        </div>
    </section>

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <section class="mb-10">
            <div class="mb-6 text-center sm:text-left">
                <h2 class="heading-font text-2xl font-bold text-blue-900 md:text-3xl">ช่องทางติดต่อหลัก</h2>
                <p class="mt-2 text-sm text-gray-600 md:text-base">เลือกช่องทางที่สะดวก เราตอบกลับโดยเร็วที่สุด</p>
            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-6">
                <a href="tel:0815652025" class="group relative overflow-hidden rounded-2xl border border-blue-100 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-blue-300 hover:shadow-lg md:p-6">
                    <div class="absolute inset-x-0 top-0 h-1 bg-linear-to-r from-blue-600 to-sky-400"></div>
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-700 transition group-hover:bg-blue-700 group-hover:text-white">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </span>
                    <p class="mt-4 text-sm font-semibold text-blue-600">โทรศัพท์</p>
                    <p class="heading-font mt-1 text-2xl font-bold text-blue-900">081-565-2025</p>
                    <p class="mt-1 text-sm text-gray-500">คุณชาญวิทย์</p>
                    <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-blue-700">
                        กดโทรเลย
                        <svg class="h-4 w-4 transition group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>

                <a href="https://line.me/R/ti/p/@era101" target="_blank" rel="noopener noreferrer" class="group relative overflow-hidden rounded-2xl border border-[#06C755]/20 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-[#06C755]/50 hover:shadow-lg md:p-6">
                    <div class="absolute inset-x-0 top-0 h-1 bg-[#06C755]"></div>
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#06C755] text-white shadow-md shadow-[#06C755]/25">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314" />
                        </svg>
                    </span>
                    <p class="mt-4 text-sm font-semibold text-[#06C755]">LINE Official</p>
                    <p class="heading-font mt-1 text-2xl font-bold text-blue-900">@era101</p>
                    <p class="mt-1 text-sm text-gray-500">แอดไลน์คุยได้ทันที</p>
                    <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#05b34c]">
                        เปิดแชท LINE
                        <svg class="h-4 w-4 transition group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>

                <a href="https://m.me/lovethaihome1" target="_blank" rel="noopener noreferrer" class="group relative overflow-hidden rounded-2xl border border-[#0084FF]/20 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-[#0084FF]/50 hover:shadow-lg md:p-6">
                    <div class="absolute inset-x-0 top-0 h-1 bg-[#0084FF]"></div>
                    <span class="relative flex h-14 w-14 items-center justify-center">
                        <span class="absolute inset-0 rounded-2xl bg-[#0084FF]/20 animate-messenger-glow" aria-hidden="true"></span>
                        <span class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0084FF] text-white shadow-md shadow-[#0084FF]/25">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 0C5.373 0 0 4.975 0 11.111c0 3.497 1.745 6.616 4.472 8.652V24l4.088-2.242c1.09.3 2.246.464 3.44.464 6.627 0 12-4.974 12-11.111C24 4.975 18.627 0 12 0zm1.191 14.963-3.055-3.26-5.963 3.26L10.732 8.1l3.13 3.26L19.742 8.1l-6.551 6.863z" />
                            </svg>
                        </span>
                    </span>
                    <p class="mt-4 text-sm font-semibold text-[#0084FF]">Facebook Messenger</p>
                    <p class="heading-font mt-1 text-2xl font-bold text-blue-900">lovethaihome1</p>
                    <p class="mt-1 text-sm text-gray-500">ทักแชทปรึกษาฟรี</p>
                    <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#0078e7]">
                        เปิด Messenger
                        <svg class="h-4 w-4 transition group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
        </section>

        <section class="mb-10 grid grid-cols-1 gap-6 lg:grid-cols-5">
            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 shadow-sm lg:col-span-3 md:p-8">
                <h2 class="heading-font text-xl font-bold text-blue-900 md:text-2xl">เกี่ยวกับเรา</h2>
                <p class="mt-3 leading-relaxed text-gray-600">
                    <span class="font-semibold text-blue-900">บริษัท เลิฟไทยโฮม จำกัด</span>
                    ให้บริการรับฝากขายบ้าน ที่ดิน และอสังหาริมทรัพย์ พร้อมให้คำปรึกษาตั้งราคา โปรโมทออนไลน์ และดูแลจนปิดการขาย
                </p>

                <ul class="mt-6 space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-gray-900">เวลาให้บริการ</p>
                            <p class="text-sm text-gray-600">วันจันทร์ - เสาร์ 09:00 – 17:00 น.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-gray-900">พื้นที่ให้บริการ</p>
                            <p class="text-sm text-gray-600">ลาดพร้าว 101 และพื้นที่ใกล้เคียง กรุงเทพฯ และปริมณฑล</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-gray-900">ปรึกษาฟรี</p>
                            <p class="text-sm text-gray-600">ไม่มีค่าใช้จ่ายในการให้คำแนะนำเบื้องต้น</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col justify-between gap-6 rounded-2xl border border-blue-100 bg-linear-to-br from-blue-50 to-white p-6 shadow-sm lg:col-span-2 md:p-8">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-blue-600">ต้องการฝากขาย?</p>
                    <h2 class="heading-font mt-2 text-xl font-bold text-blue-900 md:text-2xl">ส่งข้อมูลทรัพย์ให้เราดูแล</h2>
                    <p class="mt-3 text-sm leading-relaxed text-gray-600">
                        กรอกแบบฟอร์มรับฝากขาย ทีมงานจะติดต่อกลับเพื่อประเมินและวางแผนการขายให้คุณ
                    </p>
                </div>

                <div class="space-y-3">
                    <a href="{{ route('property-requests.index') }}" class="heading-font inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-700 px-5 py-3.5 text-center font-bold text-white shadow-md transition hover:bg-blue-800">
                        รับฝากขายบ้าน-ที่ดิน
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="{{ route('properties.index', ['is_recommend' => 'Y']) }}" class="inline-flex w-full items-center justify-center rounded-xl border border-blue-200 bg-white px-5 py-3 text-center text-sm font-semibold text-blue-800 transition hover:border-blue-400 hover:bg-blue-50">
                        ดูทรัพย์แนะนำ
                    </a>
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-gray-200 bg-white p-2 md:p-4 lg:p-6 shadow-sm md:p-8">
            <div class="flex flex-col items-center justify-center gap-4 sm:flex-row sm:items-center">
                <div class="">
                    <h2 class="heading-font text-xl font-bold text-blue-900 md:text-4xl">แผนที่ตั้ง</h2>

                </div>
            </div>

            <div class="mt-2 flex justify-center">
                <img src="{{ asset('images/map-2.webp') }}" alt="แผนที่ตั้ง" class="w-full md:w-4/5 h-auto">
            </div>
            <div class="mt-4 flex justify-center">
                <a href="https://maps.app.goo.gl/gz7X9yRDeEBGpzVP9" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-700 px-5 py-3 text-sm font-bold text-white shadow-md transition hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    นำทาง / เปิดแผนที่
                </a>
            </div>


        </section>
    </div>
</div>
@endsection
