<?php

namespace App\Http\Controllers\Ip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Url;
use App\Models\Ip;

class IpController extends Controller
{
    public function index($url)
    {
        $url = (int)$url;
        $ips = Ip::all()->where('url_id', $url);

        return $ips;
    }
}
