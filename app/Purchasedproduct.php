<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchasedproduct extends Model
{
	public $primaryKey = 'orderid'; 

    protected $fillable = [
        'userid', 'totalbill', 'payment_method', 'status', 'delivery_address'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

    public function carts()
    {
        return $this->hasMany('App\Cart', 'orderid');
    }
}
