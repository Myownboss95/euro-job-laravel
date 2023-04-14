<?php

return [
    'live-chat' => env('LIVE_CHAT'),
    'account_types' => [
        'savings',
        'current',
        'recurring deposit',
        'fixed deposit'
    ],
    'genders' => [
        'male',
        'female',
        'others'
    ],
    'account_status' => [
        'active',
        'inactive',
        'dormant',
        'freezed'
    ],
    'transaction_status' => [
        'success',
        'failed'
    ],
    'limits' => [
        0 => 1000,
        1 => 10000,
        2 => 100000,
        4 => 'unlimited',
    ],
];
