<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cache Time
    |--------------------------------------------------------------------------
    |
    | Cache time for get data selora
    |
    | - set zero for remove cache
    | - set null for forever
    |
    | - unit: minutes
    */

    "cache_time" => env("SELORA_CACHE_TIME", 0),

    /*
    |--------------------------------------------------------------------------
    | Default Panel Name
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the panel name you want
    |
    */

    'panel_name' => env('SELORA_PANEL_NAME', 'Selora'),

];
