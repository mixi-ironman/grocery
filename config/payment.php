<?php

return [
    'vnpay' => [
        'version' => env('VNPAY_VERSION'),
        'merchart_id' => env('VNPAY_ID'),
        'merchart_secret' => env('VNPAY_SECRET'),
        'locate' => env('VNPAY_Locale'),
        'url' => env('VNPAY_URL'),
        'bankcode' => env('VNPAY_BANKCODE'),
        'currency' => env('VNPAY_Curr_Code'),
    ],
];

?>