<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Moneris API Token
    |--------------------------------------------------------------------------
    |
    | Define your Moneris API token for authentication.
    |
    */

    'api_token' => env('MONERIS_API_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Moneris Store Identifier
    |--------------------------------------------------------------------------
    |
    | Specify the unique identifier provided by Moneris upon merchant account set up.
    |
    */

    'store_id' => env('MONERIS_STORE_ID'),
];