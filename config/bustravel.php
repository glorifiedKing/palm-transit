<?php

return [
    'path'       => 'transit',
    'user_model' => App\User::class,
    'payment_gateways' => [
        'mtn_rw' => [
            'username' => 'palm_kash',
            'password' => '12345',
            'url' => env('palmkash_gateway_url', 'https://testbed.palmkash.com/palmgw/merchantpayment'),
         ],
    ],
];
