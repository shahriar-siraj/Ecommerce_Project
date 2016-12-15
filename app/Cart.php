<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $primaryKey = 'cartid'; 

    protected $fillable = [
        'userid', 'productid', 'quantity', 'orderid'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

    public function purchasedproduct()
    {
        return $this->belongsTo('App\Purchasedproduct','orderid');
    }

    public function product()
    {
        return $this->belongsTo('App\Product','productid');
    }
}
