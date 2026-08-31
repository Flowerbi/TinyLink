<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::post('/url', [\App\Http\Controllers\Url\UrlController::class, 'store'])->name('url.store');
