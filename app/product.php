<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'subcategory_id', 'title', 'name', 'image1', 'image2', 'image3', 'image4', 'old_price', 'price', 'short_desc', 'product_code', 'amount', 'desc', 'specification', 'isFeature',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
    
    public function subcategory() {
        return $this->belongsTo('App\Subcategory');
    }
}
