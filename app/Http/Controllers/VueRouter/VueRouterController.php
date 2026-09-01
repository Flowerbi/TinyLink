<?php

namespace App\Http\Controllers\VueRouter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ip;

class VueRouterController extends Controller
{
    public function index()
    {
        return view('main');
    }
}
