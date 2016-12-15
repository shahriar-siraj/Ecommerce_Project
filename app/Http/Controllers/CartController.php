<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index()
    {
        $carts = \App\Cart::all();
        return view('cart',compact('carts'));
    }

    public function store(Request $request)
    {   
    	if($request->input('userid') == null)
    	{
    		return redirect()->route('register')->with('message','Please register first in order to buy products!');
    	}
    	else
    	{
	        \App\Cart::create($request->all());
	        return redirect()->route('products.show', [$request->input('productid')])->with('message','Product has been added to cart!');   	
    	}
    }

    public function destroy(\App\Cart $cart)
    {
        $cart->delete();
        return redirect()->route('carts.index')->with('message','Product has been removed from cart successfully!');
    }

    
}
