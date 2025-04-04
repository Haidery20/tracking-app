<?php

return [
    'sitekey' => env('NOCAPTCHA_SITEKEY', ''),
    'secret' => env('NOCAPTCHA_SECRET', ''),
    'options' => [
        'timeout' => 5,
        'verify' => true,
    ],
];
