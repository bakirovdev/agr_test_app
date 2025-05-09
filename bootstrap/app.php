<?php

$app = \App\Base\Application::configure(basePath: dirname(__DIR__))
    ->create();

$app->singleton(
    Illuminate\Foundation\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    \App\Exceptions\Handler::class
);

return $app;
