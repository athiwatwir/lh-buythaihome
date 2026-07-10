<?php

$siteTitle = 'BuyThaiHome: ซื้อบ้าน ซื้อที่ดิน ซื้ออสังหา ขายบ้าน ขายที่ดิน ขายอสังหา';
$siteDescription = 'รับฝากขายบ้าน ที่ดิน คอนโด และอสังหาริมทรัพย์ทุกประเภท ในเขตกรุงเทพฯ และปริมณฑล';
$siteImage = rtrim(env('APP_URL', 'http://localhost'), '/').'/images/logo/logo.png';

return [
    'meta' => [
        'defaults' => [
            'title' => $siteTitle,
            'description' => $siteDescription,
            'separator' => ' - ',
            'keywords' => [
                'บ้าน',
                'บ้านมือสอง',
                'บ้านใหม่',
                'คอนโด'
            ],
        ],
    ],
    'opengraph' => [
        'defaults' => [
            'title' => $siteTitle,
            'description' => $siteDescription,
            'site_name' => $siteTitle,
            'type' => 'website',
            'images' => [
                $siteImage,
            ],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card' => 'summary_large_image',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title' => $siteTitle,
            'description' => $siteDescription,
            'type' => false,
            'images' => [
                $siteImage,
            ],
        ],
    ],
];
