@if ($paginator->hasPages())
    <nav role="navigation" aria-label="การเปลี่ยนหน้า" class="w-full max-w-full">
        <div class="flex w-full max-w-full justify-center overflow-hidden px-1">
            <div class="inline-flex max-w-full flex-wrap items-center justify-center gap-1 sm:gap-0 sm:shadow-sm sm:rounded-lg">
                {{-- Previous --}}
                @if ($paginator->onFirstPage())
                    <span class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-gray-50 px-2 text-xs font-medium text-gray-400 sm:h-10 sm:min-w-10 sm:rounded-none sm:rounded-l-lg sm:border-gray-300 sm:px-2 sm:text-sm" aria-disabled="true">
                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">ก่อนหน้า</span>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-300 bg-white px-2 text-xs font-medium text-gray-600 transition hover:border-blue-300 hover:bg-blue-50 hover:text-blue-700 sm:h-10 sm:min-w-10 sm:rounded-none sm:rounded-l-lg sm:px-2 sm:text-sm" aria-label="ก่อนหน้า">
                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="inline-flex h-9 min-w-8 items-center justify-center px-1 text-xs font-medium text-gray-500 sm:h-10 sm:min-w-10 sm:border sm:border-gray-300 sm:bg-white sm:px-3 sm:text-sm sm:-ml-px">{{ $element }}</span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-blue-700 bg-blue-700 px-2.5 text-xs font-semibold text-white sm:h-10 sm:min-w-10 sm:rounded-none sm:px-4 sm:text-sm sm:-ml-px">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-300 bg-white px-2.5 text-xs font-medium text-gray-700 transition hover:border-blue-300 hover:bg-blue-50 hover:text-blue-700 sm:h-10 sm:min-w-10 sm:rounded-none sm:px-4 sm:text-sm sm:-ml-px" aria-label="ไปหน้า {{ $page }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-300 bg-white px-2 text-xs font-medium text-gray-600 transition hover:border-blue-300 hover:bg-blue-50 hover:text-blue-700 sm:h-10 sm:min-w-10 sm:rounded-none sm:rounded-r-lg sm:px-2 sm:text-sm sm:-ml-px" aria-label="ถัดไป">
                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @else
                    <span class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-gray-50 px-2 text-xs font-medium text-gray-400 sm:h-10 sm:min-w-10 sm:rounded-none sm:rounded-r-lg sm:border-gray-300 sm:px-2 sm:text-sm sm:-ml-px" aria-disabled="true">
                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">ถัดไป</span>
                    </span>
                @endif
            </div>
        </div>

        <p class="mt-3 text-center text-xs text-gray-500 sm:mt-4 sm:text-sm">
            หน้า {{ $paginator->currentPage() }} จาก {{ $paginator->lastPage() }}
            <span class="hidden sm:inline"> · พบ {{ number_format($paginator->total()) }} รายการ</span>
        </p>
    </nav>
@endif
