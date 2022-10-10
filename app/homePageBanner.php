<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePageBanner extends Model
{
    protected $fillable = [
        'left_banner', 'right_banner', 'banner_id'
    ];
}
