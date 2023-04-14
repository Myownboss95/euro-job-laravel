<?php

return [
    'from' => env('APP_NAME'),
    'messagebird' => [
        'key' => env('MESSAGEBIRD_ACCESS_KEY'),
        'phone' => env('MESSAGEBIRD_PHONE_NUMBER')
    ]
];
