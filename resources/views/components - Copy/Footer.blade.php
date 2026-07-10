<footer class="bg-white pt-8 pb-4 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-6 md:mb-12">

            <div class="lg:col-span-2">
                <h3 class="text-xl font-bold text-blue-900 mb-3">บริษัท เลิฟไทยโฮม จำกัด</h3>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">081-565-2025 <span class="font-medium">คุณชาญวิทย์</span></span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold text-xs">LINE</div>
                        <span class="text-gray-700">Line แอดไลน์เบอร์</span>
                    </li>
                </ul>
                <a href="#" class="inline-block mt-6 px-6 py-2.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">ติดต่อเรา</a>
            </div>

            <div class="hidden md:block">
                <h4 class="text-lg font-bold text-blue-900 mb-6">เมนูหลัก</h4>
                <ul class="space-y-3 text-gray-600">
                    <li><a href="#" class="hover:text-blue-600">หน้าหลัก</a></li>
                    <li><a href="#" class="hover:text-blue-600">รับฝากขายบ้าน-ที่ดิน</a></li>
                    <li><a href="#" class="hover:text-blue-600">อสังหาริมทรัพย์</a></li>
                    <li><a href="#" class="hover:text-blue-600">บทความ</a></li>
                    <li><a href="#" class="hover:text-blue-600">ติดต่อเรา</a></li>
                </ul>
            </div>

            <div class="hidden md:block">
                <h4 class="text-lg font-bold text-blue-900 mb-6">บริการของเรา</h4>
                <ul class="space-y-3 text-gray-600">
                    <li><a href="#" class="hover:text-blue-600">รับฝากขาย</a></li>
                    <li><a href="#" class="hover:text-blue-600">หาที่ดิน/หาทรัพย์</a></li>
                    <li><a href="#" class="hover:text-blue-600">ประเมินราคาทรัพย์</a></li>
                    <li><a href="#" class="hover:text-blue-600">ที่ปรึกษาอสังหาฯ</a></li>
                </ul>
            </div>

            <div>
                <div class="hidden md:block">
                    <h4 class="text-lg font-bold text-blue-900 mb-6">เกี่ยวกับเรา</h4>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li><a href="#" class="hover:text-blue-600">เกี่ยวกับเรา</a></li>
                        <li><a href="#" class="hover:text-blue-600">ทีมงาน</a></li>
                        <li><a href="#" class="hover:text-blue-600">รีวิวจากลูกค้า</a></li>
                    </ul>
                </div>

                <h4 class="text-lg font-bold text-blue-900 mb-4">ติดตามเรา</h4>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 rounded-full bg-blue-800 text-white flex items-center justify-center hover:bg-blue-900 transition">f</a>
                    <a href="#" class="w-10 h-10 rounded-full bg-green-500 text-white flex items-center justify-center hover:bg-green-600 transition">L</a>
                    <a href="#" class="w-10 h-10 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition">▶</a>
                    <a href="#" class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center hover:bg-gray-800 transition">tik</a>
                </div>
            </div>

        </div>

        <div class="text-center pt-8 border-t border-gray-200 text-gray-500 text-sm max-md:pb-4">
            © 2026 LOVE THAI HOME CO., LTD. All Rights Reserved.
        </div>
    </div>
</footer>

<nav x-data="mobileBottomNav()" x-init="sync()" @hashchange.window="sync()" class="md:hidden fixed bottom-0 inset-x-0 z-50 bg-gradient-to-t from-blue-950 via-blue-900 to-blue-800 border-t border-blue-600/40 shadow-[0_-8px_30px_rgba(23,37,84,0.35)] pb-[env(safe-area-inset-bottom)]" aria-label="เมนูหลักมือถือ">
    <div class="grid grid-cols-4 min-h-[4.75rem]">
        <a href="{{ route('home') }}" @click="active = 'home'" class="group flex flex-col items-center justify-center gap-0.5 px-1 min-w-0 transition-colors" :class="linkClass('home')" :aria-current="active === 'home' ? 'page' : false">
            <span class="flex items-center justify-center w-10 h-8 rounded-xl transition-colors" :class="iconWrapClass('home')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </span>
            <span class="text-[10px] leading-tight text-center font-medium heading-font line-clamp-2 w-full px-0.5">หน้าแรก</span>
        </a>

        <a href="{{ route('home') }}#consignment" @click="active = 'consignment'" class="group flex flex-col items-center justify-center gap-0.5 px-1 min-w-0 transition-colors" :class="linkClass('consignment')">
            <span class="flex items-center justify-center w-10 h-8 rounded-xl transition-colors" :class="iconWrapClass('consignment')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>
            </span>
            <span class="text-[10px] leading-tight text-center font-medium heading-font line-clamp-2 w-full px-0.5">รับฝากขายบ้าน-ที่ดิน</span>
        </a>

        <a href="{{ route('home') }}#recommended-properties" @click="active = 'recommended'" class="group flex flex-col items-center justify-center gap-0.5 px-1 min-w-0 transition-colors" :class="linkClass('recommended')">
            <span class="flex items-center justify-center w-10 h-8 rounded-xl transition-colors" :class="iconWrapClass('recommended')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
            </span>
            <span class="text-[10px] leading-tight text-center font-medium heading-font line-clamp-2 w-full px-0.5">ทรัพย์แนะนำ</span>
        </a>

        <a href="tel:0815652025" class="group flex flex-col items-center justify-center gap-0.5 px-1 min-w-0 transition-colors text-blue-200/90 hover:text-white active:text-white">
            <span class="flex items-center justify-center w-10 h-8 rounded-xl transition-colors bg-transparent group-hover:bg-white/10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </span>
            <span class="text-[10px] leading-tight text-center font-medium heading-font line-clamp-2 w-full px-0.5">ติดต่อเรา</span>
        </a>
    </div>
</nav>
