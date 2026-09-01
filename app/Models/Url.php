<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'link_source',
        'link_shorted',
    ];

    protected $table = 'urls';
}
