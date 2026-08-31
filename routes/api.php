<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/urls', [\App\Http\Controllers\Url\UrlController::class, 'index'])->name('urls.index');
Route::post('/urls', [\App\Http\Controllers\Url\UrlController::class, 'store'])->name('urls.store');
