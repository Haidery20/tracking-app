<?php

return [
    'sitekey' => env('NOCAPTCHA_SITEKEY'),
    'secret' => env('NOCAPTCHA_SECRET'),
    'version' => env('NOCAPTCHA_VERSION', 'v2'),
    'options' => [
        'timeout' => 2.0,
        'verify' => true,
    ],
];
