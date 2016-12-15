<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
	public function products()
    {
        return $this->hasMany('App\Product', 'subcatid');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','catid');
    }
}
