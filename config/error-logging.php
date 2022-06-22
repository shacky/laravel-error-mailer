<?php

return [
    'error-mailer' => [
        'driver' => 'monolog',
        'handler' => CrazyIT\Laravel\ErrorMailer\ErrorHandler::class,
        'formatter' => Monolog\Formatter\HtmlFormatter::class,
        'level' => 'error',
    ],
];
