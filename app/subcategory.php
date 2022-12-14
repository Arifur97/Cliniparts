<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'category_id', 'subcategory',
    ];
    
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
