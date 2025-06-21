<?php

use App\Enums\TelegramChannel;
use App\Jobs\TelegramLog;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Queue\MaxAttemptsExceededException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->dontReport([
            NotFoundHttpException::class,
            ConnectionException::class,
            MaxAttemptsExceededException::class,
        ]);

        $exceptions->reportable(function (Throwable $e) {
            $request = request();
            $message = '❌ HATA' . PHP_EOL;
            $message .= '*Env: ' . Str::ucfirst(app()->environment()) . '*' .PHP_EOL;
            $message .= "*Request Method: {$request->getMethod()}*" . PHP_EOL;
            $message .= "*Host: {$request->getHost()}*" . PHP_EOL;
            $message .= "*URI: {$request->getRequestUri()}*" . PHP_EOL;
            $message .= "*Full URI: {$request->fullUrl()}*" . PHP_EOL;

            try {
                $user = $request->user();
                $user = $user?->full_name ?? null;
                $message .= $user ? ('*(User: ' . $user . ')* ') : '';
            } catch (\Exception $e) {
                Log::error($e->getMessage());
            }

            $message .= '```' . PHP_EOL;
            $message .= $e->getMessage() . '```';

            if (app()->environment('production')) {
                TelegramLog::dispatch($message, TelegramChannel::errors);
            }
        });
    })->create();
