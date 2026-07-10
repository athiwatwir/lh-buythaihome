<header x-data="{ mobileMenuOpen: false }" class="bg-white border-b border-gray-100 sticky top-0 z-50" @keydown.escape.window="mobileMenuOpen = false">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-20 w-full gap-2 sm:gap-3">
            <a href="#" class="flex-shrink-0 flex items-center">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" class="w-auto h-12 sm:h-14">
            </a>

            <nav class="hidden md:flex flex-1 justify-center space-x-8 heading-font">
                <a href="#" class="text-blue-600 font-medium">หน้าหลัก</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">รับฝากขายบ้าน-ที่ดิน</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">อสังหาริมทรัพย์</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">ติดต่อเรา</a>
            </nav>

            <a href="tel:0815652025" class="lg:hidden ml-auto flex items-center gap-1.5 sm:gap-2 border border-gray-200 rounded-lg px-3 py-1.5 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium hover:bg-gray-50 transition min-w-0 shrink-0">
                <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="flex flex-col leading-none min-w-0">
                    <span class="text-blue-600 font-bold truncate text-lg heading-font">081-565-2025</span>
                    <span class="text-[13px] text-gray-500 truncate heading-font">คุณชาญวิทย์</span>
                </span>
            </a>

            <div class="hidden lg:flex items-center space-x-3 ml-auto">
                <a href="tel:0815652025" class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-medium hover:bg-gray-50 transition">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="flex flex-col leading-none">
                        <span class="text-blue-600 font-bold">081-565-2025</span>
                        <span class="text-xs text-gray-500">คุณชาญวิทย์</span>
                    </span>
                </a>
                <a href="#" class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-medium text-green-600 hover:bg-gray-50 transition">
                    LINE Official
                </a>
                <a href="#" class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-medium text-blue-500 hover:bg-gray-50 transition">
                    Messenger
                </a>
            </div>

            <div class="md:hidden flex-shrink-0 flex items-center">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" :aria-expanded="mobileMenuOpen" aria-controls="mobile-menu" class="text-gray-500 hover:text-gray-700 focus:outline-none p-2">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <nav id="mobile-menu" x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" @click.outside="mobileMenuOpen = false" class="md:hidden border-t border-gray-100 py-4 space-y-1 heading-font">
            <a href="#" @click="mobileMenuOpen = false" class="block px-2 py-2.5 text-blue-600 font-medium rounded-lg">หน้าหลัก</a>
            <a href="#" @click="mobileMenuOpen = false" class="block px-2 py-2.5 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">รับฝากขายบ้าน-ที่ดิน</a>
            <a href="#" @click="mobileMenuOpen = false" class="block px-2 py-2.5 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">อสังหาริมทรัพย์</a>
            <a href="#" @click="mobileMenuOpen = false" class="block px-2 py-2.5 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">ติดต่อเรา</a>
            <div class="pt-3 mt-3 border-t border-gray-100 space-y-2 px-2">
                <a href="#" class="block text-center border border-gray-200 rounded-lg px-4 py-2.5 text-sm font-medium text-green-600 hover:bg-gray-50 transition">LINE Official</a>
                <a href="#" class="block text-center border border-gray-200 rounded-lg px-4 py-2.5 text-sm font-medium text-blue-500 hover:bg-gray-50 transition">Messenger</a>
            </div>
        </nav>
    </div>
</header>
