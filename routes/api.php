<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/urls', [\App\Http\Controllers\Url\UrlController::class, 'index'])->name('urls.index');
Route::get('/urls/{url}', [\App\Http\Controllers\Url\UrlController::class, 'show'])->name('urls.show');
Route::post('/urls', [\App\Http\Controllers\Url\UrlController::class, 'store'])->name('urls.store');
Route::delete('/urls/{url}', [\App\Http\Controllers\Url\UrlController::class, 'destroy'])->name('urls.destroy');
