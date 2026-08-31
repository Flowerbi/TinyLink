<?php

namespace App\Http\Controllers\Url;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Url\StoreRequest;

use Illuminate\Support\Str;

use App\Models\Url;

class UrlController extends Controller
{
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

//    public function redirect($hashLink)
//    {
//
//    }
}
