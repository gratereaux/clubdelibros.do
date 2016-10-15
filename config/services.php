<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '903065896464239',
        'client_secret' => '1780328f379fddac10ffae49f498090e',
        'redirect' => 'http://clubdelibros.dev:8000/social/callback/facebook',
    ],

    'google' => [
        'client_id' => '455043687742-2uho33bpa8petkolr74ndcduplpc0t1s.apps.googleusercontent.com',
        'client_secret' => 'YVdQAPbe0Ol3mjEsdVGa0EiH',
        'redirect' => 'http://clubdelibros.dev:8000/social/callback/google',
    ],
];
