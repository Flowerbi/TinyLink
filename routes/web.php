<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\VueRouter\VueRouterController::class, 'index']);
Route::get('/url/{url}', [\App\Http\Controllers\VueRouter\VueRouterController::class, 'index']);

Route::get('/tl/{hashLink}', [\App\Http\Controllers\Url\UrlController::class, 'redirect'])
->where('hashLink', '[A-Za-z0-9]+');
