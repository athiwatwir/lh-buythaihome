<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-20 w-full gap-2 sm:gap-3">
            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" class="w-auto h-12 sm:h-14">
            </a>

            <nav class="hidden md:flex flex-1 justify-center space-x-8 heading-font">
                <a href="{{ route('home') }}" class="text-blue-600 font-medium">หน้าหลัก</a>
                <a href="{{ route('property-requests.index') }}" class="text-gray-600 hover:text-blue-600 transition">รับฝากขายบ้าน-ที่ดิน</a>
                <a href="{{ route('properties.index') }}" class="text-gray-600 hover:text-blue-600 transition">ทรัพย์แนะนำ</a>
                <a href="{{ route('contact.index') }}" class="text-gray-600 hover:text-blue-600 transition">ติดต่อเรา</a>
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
                <a href="https://line.me/ti/p/c89UEjxuvE" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-medium text-green-600 hover:bg-gray-50 transition">
                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#06C755] text-white">
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314" />
                        </svg>
                    </span>
                    LINE Official
                </a>
                <a href="https://m.me/lovethaihome1" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-medium text-[#0084FF] hover:bg-gray-50 transition">
                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#0084FF] text-white">
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 0C5.373 0 0 4.975 0 11.111c0 3.497 1.745 6.616 4.472 8.652V24l4.088-2.242c1.09.3 2.246.464 3.44.464 6.627 0 12-4.974 12-11.111C24 4.975 18.627 0 12 0zm1.191 14.963-3.055-3.26-5.963 3.26L10.732 8.1l3.13 3.26L19.742 8.1l-6.551 6.863z" />
                        </svg>
                    </span>
                    Messenger
                </a>
            </div>
        </div>
    </div>
</header>
