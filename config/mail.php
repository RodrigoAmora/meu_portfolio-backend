<?php
return array(
    'driver' => env('MAIL_DRIVER', env('MAIL_DRIVER')),

    'host' => env('MAIL_HOST', env('MAIL_HOST')),

    'port' => env('MAIL_PORT', env('MAIL_PORT')),

    'from' => ['address' => null, 'name' => null],

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('MAIL_USERNAME', env('MAIL_USERNAME')),

    'password' => env('MAIL_PASSWORD', env('MAIL_PASSWORD')),

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,
);