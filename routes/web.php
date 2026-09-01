<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainPage\MainPageController::class, 'index'])->name('main-page.index');

Route::get('/tl/{hashLink}', [\App\Http\Controllers\Url\UrlController::class, 'redirect'])
->where('hashLink', '[A-Za-z0-9]+');
