<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchasedproductController extends Controller
{
	public function index()
    {
        $purchasedproducts = \App\Purchasedproduct::all();
        return view('order_history',compact('purchasedproducts'));
    }

    public function create(Request $request)
    {
    	$bill=$request->get('bill');
    	return view('place_order', compact('bill'));
    }

    public function store(Request $request)
    {   
        \App\Purchasedproduct::create($request->all());
        
        $oid = \App\Purchasedproduct::count();
        $carts = \App\Cart::where('orderid',-1)->update(['orderid' => $oid]);;

        return redirect()->route('purchasedproducts.show', [$request->input('productid')])->with('message','Product order has been successfully placed!');   
    }
}
