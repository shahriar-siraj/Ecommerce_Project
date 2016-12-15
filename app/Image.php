<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public $primaryKey = 'imageid'; 

    public function product()
    {
        return $this->belongsTo('App\Product','productid');
    }
}
