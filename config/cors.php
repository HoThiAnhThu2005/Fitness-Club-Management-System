<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    */

    'paths' => ['api/*'],             // cho phép tất cả các route API
    'allowed_methods' => ['*'],       // cho phép tất cả method: GET, POST, PUT, DELETE...
    'allowed_origins' => ['http://localhost:5173'], // FE đang chạy ở port 5173
    'allowed_headers' => ['*'],       // cho phép tất cả header
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,  // nếu FE không gửi cookie/token thì để false
];
