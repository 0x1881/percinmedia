<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::post('contact', [PageController::class, 'contact']);

Route::get('{page?}', [PageController::class, 'index'])
    ->where('page', '[a-z0-9\/-]*')
    ->defaults('page', 'index')
    ->name('page');
