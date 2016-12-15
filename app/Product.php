<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['title', 'price'];

    public function images()
    {
        return $this->hasMany('App\Image', 'productid');
    }

    public function sizes()
    {
        return $this->hasMany('App\Size', 'productid');
    }

    public function carts()
    {
        return $this->hasMany('App\Cart', 'productid');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand','brandid');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory','subcatid');
    }
}
