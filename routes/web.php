<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

//Route::get('/tl/{hashLink}', [\App\Http\Controllers\Url\UrlController::class, 'redirect']);
