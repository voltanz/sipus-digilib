<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        // Guard adalah mekanisme yang menangani otentikasi dalam Laravel.
        // 'web', yang secara umum digunakan untuk otentikasi melalui sesi web.
        'guard' => 'web',
        // menentukan penyedia otentikasi yang akan digunakan untuk mengatur reset password pengguna
        // pengguna akan menggunakan tabel pengguna default untuk mengatur reset password.
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session', // menyimpan otentikasi pengguna
            'provider' => 'users', // tabel dengan nama 'user' menjadi sumber informasi yang akan diverivikasi
            'middleware' => ['web'] // otentikasi hanya berlaku untuk media web
        ],

        'api' => [
            'driver' => 'token', // autentikasi menggunakan token
            'provider' => 'users', // model User digunakan sebagai provider untuk autentikasi
            'middleware' => ['auth:api'] // mengamankan endpoint API agar hanya dapat diakses oleh pengguna yang telah melakukan autentikasi.
            // 'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent', // menggunakan driver eloquent yang merupakan default driver autentikasi Laravel.
            // driver yang disediakan oleh Laravel, seperti database dan session,
            'model' => App\User::class, // model yang digunakan sebagai autentikasi (mencari dan memverivikasi pengguna)
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users', // table user akan digunakan oleh laravle untuk melakukan autentikasi
            'table' => 'password_resets', // table untuk menyimpan token reset password
            //  Saat pengguna meminta reset password, Laravel akan menyimpan token reset password ke dalam tabel
            'expire' => 60, // waktu kadaluarsa token resert password alam menit
            'throttle' => 60, // waktu jeda yang harus diambil antara dua permintaan reset password
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

    // enable email verivication
    'email_verification' => true

];
