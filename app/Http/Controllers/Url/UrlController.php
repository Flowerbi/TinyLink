<?php

namespace App\Http\Controllers\Url;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests\Url\StoreRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Url;
use App\Models\Ip;

class UrlController extends Controller
{
    public function index()
    {
        $urlsJoinIps = DB::table('urls as u')
            ->select('u.*', DB::raw('COUNT(i.url_id) as quantity_follow'))
            ->leftJoin('ips as i', 'i.url_id', 'u.id')
            ->groupBy('u.id')
            ->get();
        return $urlsJoinIps;
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $linkSource = $request->input('url');
        $linkShorted = url('') . '/tl/' . Str::random(10);

        Url::create([
            'link_source' => $linkSource,
            'link_shorted' => $linkShorted
        ]);

        return redirect()->back();
    }

    public function redirect($hashLink)
    {
        $linkShorted = request()->url();
        $infoUrl = Url::where('link_shorted', $linkShorted)->first();
        $ipFollow = request()->ip();
        $dateTimeFollow = Carbon::now()->toDateTimeString();

        Ip::create([
            'ip_follow' => $ipFollow,
            'time_follow' => $dateTimeFollow,
            'url_id' => $infoUrl->id
        ]);

        return redirect($infoUrl->link_source);
    }
}
