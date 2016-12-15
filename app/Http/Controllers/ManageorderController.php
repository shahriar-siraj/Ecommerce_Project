<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageorderController extends Controller
{
    public function index()
    {
        $purchasedproducts = \App\Purchasedproduct::all();
        return view('manage_orders',compact('purchasedproducts'));
    }

    public function create(Request $request)
    {
    	$orderid=$request->get('id');
    	\App\Purchasedproduct::where('orderid',$orderid)->update(['status' => "Paid"]);
    	
    	return redirect()->route('orders.index')->with('message','Payment Status has been updated successfully!');
    }
}
