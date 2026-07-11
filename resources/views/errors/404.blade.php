<!DOCTYPE html>
<html lang="th" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ไม่พบหน้านี้ — 404 | Love Thai Home</title>
    <meta name="robots" content="noindex, nofollow">
    <x-site-icons />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>
<body class="bg-gray-50 antialiased max-md:pb-[calc(4.75rem+env(safe-area-inset-bottom))]">
    <x-Navbar />
    <x-mobile-contact-bar />

    <main class="relative overflow-hidden">
        <div class="pointer-events-none absolute inset-0" aria-hidden="true">
            <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-blue-200/40 blur-3xl"></div>
            <div class="absolute -right-16 bottom-0 h-80 w-80 rounded-full bg-sky-200/30 blur-3xl"></div>
        </div>

        <div class="relative mx-auto flex min-h-[70vh] max-w-7xl flex-col items-center justify-center px-4 py-16 text-center sm:px-6 lg:px-8">
            <p class="heading-font text-[6.5rem] font-black leading-none tracking-tight text-blue-900/10 sm:text-[8rem] md:text-[10rem]">
                404
            </p>

            <div class="-mt-10 sm:-mt-14 md:-mt-16">
                <span class="inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white px-3 py-1 text-xs font-semibold text-blue-700 shadow-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                    ไม่พบหน้าที่ต้องการ
                </span>

                <h1 class="heading-font mt-4 text-2xl font-bold text-blue-900 sm:text-3xl md:text-4xl">
                    อุ๊ย! เหมือนหลงทางหน่อย
                </h1>
                <p class="mx-auto mt-3 max-w-md text-sm leading-relaxed text-gray-600 sm:text-base">
                    หน้าที่คุณกำลังมองหาอาจถูกย้าย ลบไปแล้ว หรือพิมพ์ URL ผิด
                    ลองกลับหน้าหลัก หรือดูรายการทรัพย์แนะนำได้เลย
                </p>
            </div>

            <div class="mt-8 flex w-full max-w-md flex-col gap-3 sm:max-w-none sm:flex-row sm:justify-center">
                <a href="{{ route('home') }}" class="heading-font inline-flex items-center justify-center gap-2 rounded-xl bg-blue-700 px-6 py-3.5 text-sm font-bold text-white shadow-md transition hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    กลับหน้าหลัก
                </a>
                <a href="{{ route('properties.index', ['is_recommend' => 'Y']) }}" class="heading-font inline-flex items-center justify-center gap-2 rounded-xl border-2 border-blue-900 bg-white px-6 py-3.5 text-sm font-bold text-blue-900 shadow-sm transition hover:bg-blue-50 focus:outline-none focus:ring-4 focus:ring-blue-200">
                    ดูทรัพย์แนะนำ
                </a>
            </div>

            <div class="mt-10 grid w-full max-w-2xl grid-cols-1 gap-3 sm:grid-cols-3">
                <a href="{{ route('properties.index') }}" class="rounded-2xl border border-gray-200 bg-white px-4 py-4 text-left shadow-sm transition hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-md">
                    <p class="text-sm font-bold text-blue-900">รายการทรัพย์</p>
                    <p class="mt-1 text-xs text-gray-500">ค้นหาบ้าน ที่ดิน คอนโด</p>
                </a>
                <a href="{{ route('property-requests.index') }}" class="rounded-2xl border border-gray-200 bg-white px-4 py-4 text-left shadow-sm transition hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-md">
                    <p class="text-sm font-bold text-blue-900">รับฝากขาย</p>
                    <p class="mt-1 text-xs text-gray-500">ฝากขายบ้าน-ที่ดินกับเรา</p>
                </a>
                <a href="{{ route('contact.index') }}" class="rounded-2xl border border-gray-200 bg-white px-4 py-4 text-left shadow-sm transition hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-md">
                    <p class="text-sm font-bold text-blue-900">ติดต่อเรา</p>
                    <p class="mt-1 text-xs text-gray-500">โทร / LINE / Messenger</p>
                </a>
            </div>
        </div>
    </main>

    <x-Footer />
</body>
</html>
