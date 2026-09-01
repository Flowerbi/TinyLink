<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ip;

class MainPageController extends Controller
{
    public function index()
    {
        return view('main');
    }
}
