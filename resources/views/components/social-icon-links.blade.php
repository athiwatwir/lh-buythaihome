@props([
'buttonClass' => 'h-10 w-10',
'iconClass' => 'h-5 w-5',
])

@php
$socialLinks = [
[
'label' => 'LINE — @era101',
'href' => 'https://line.me/R/ti/p/@era101',
'bg' => 'bg-[#06C755] hover:bg-[#05b34c]',
'icon' => '
<path fill="currentColor" d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314" />',
'viewBox' => '0 0 24 24',
],
[
'label' => 'Facebook — ศูนย์รับฝาก ซื้อ-ขาย บ้านที่ดิน',
'href' => 'https://www.facebook.com/Lovethaihomeera/',
'bg' => 'bg-[#1877F2] hover:bg-[#166FE5]',
'icon' => '
<path fill="currentColor" d="M9.101 23.691v-9.98H6.162V11.05h2.939V8.86c0-2.906 1.775-4.49 4.37-4.49 1.242 0 2.303.092 2.615.134v3.03l-1.794.001c-1.406 0-1.677.668-1.677 1.648v2.168h3.35l-.437 3.66h-2.913v9.98H9.101z" />',
'viewBox' => '0 0 24 24',
],
[
'label' => 'Facebook — lovethaihome',
'href' => 'https://www.facebook.com/lovethaihome1/',
'bg' => 'bg-[#1877F2] hover:bg-[#166FE5]',
'icon' => '
<path fill="currentColor" d="M9.101 23.691v-9.98H6.162V11.05h2.939V8.86c0-2.906 1.775-4.49 4.37-4.49 1.242 0 2.303.092 2.615.134v3.03l-1.794.001c-1.406 0-1.677.668-1.677 1.648v2.168h3.35l-.437 3.66h-2.913v9.98H9.101z" />',
'viewBox' => '0 0 24 24',
],
[
'label' => 'TikTok — @era_ladprao101',
'href' => 'https://www.tiktok.com/@era_ladprao101',
'bg' => 'bg-black hover:bg-gray-900',
'icon' => '
<path fill="currentColor" d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.76a4.85 4.85 0 01-1.01-.07z" />',
'viewBox' => '0 0 24 24',
],
[
'label' => 'YouTube — lovethaihome',
'href' => 'https://www.youtube.com/channel/UCAgAzkauVTeyL9ZQUtWB-eQ',
'bg' => 'bg-[#FF0000] hover:bg-[#e60000]',
'icon' => '
<path fill="currentColor" d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />',
'viewBox' => '0 0 24 24',
],
];
@endphp

<div {{ $attributes->merge(['class' => 'flex flex-wrap gap-3']) }}>
    @foreach ($socialLinks as $link)
    <a href="{{ $link['href'] }}" target="_blank" rel="noopener noreferrer" title="{{ $link['label'] }}" aria-label="{{ $link['label'] }}" class="flex {{ $buttonClass }} shrink-0 items-center justify-center rounded-full text-white transition-transform duration-200 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 {{ $link['bg'] }}">
        <svg class="{{ $iconClass }}" viewBox="{{ $link['viewBox'] }}" aria-hidden="true">
            {!! $link['icon'] !!}
        </svg>
    </a>
    @endforeach
</div>
