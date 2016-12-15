<?php

namespace App\Http\Controllers;
use Auth;
use \App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // $images = Product::all()->images;
        // return view('tasks.index',compact('tasks'));

        // $products = DB::select('select id, title, price, image from products, images where products.imageid=images.imageid and products.imageid=products.imageid');
        
        //$images = DB::select('select image from products, images where products.id=images.productid and products.id= :pid',['pid' => $products[1]->id]);
     
        return view('welcome',compact('products'));
    }
    
    public function show(Product $product)
    {
        // $brands = DB::select('select name from products, brands where products.brandid=brands.id and products.id= :id',['id'=>$product->id]);
        // $images = DB::select('select image from products, images where products.id=images.productid and products.id= :id',['id'=>$product->id]);
        // $reviews = DB::select('select name, review from products, reviews, users where products.id=reviews.productid and reviews.userid=users.id');
        // $sizes = DB::select('select name, quantity from products, sizes where products.id=sizes.productid and products.id= :id',['id'=>$product->id]);
        // $products = DB::select('select products.id, title, price from products, subcategories where products.subcatid=subcategories.id and subcategories.id= :pid',['pid' => $product->id]);

        return view('product_details',compact('product'));
    }
    
    public function edit(Product $product)
    {
        return view('edit_product',compact('product'));

    }
    
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')->with('message','Task has been updated successfully!');
    }
    
    public function store(Request $request)
    {   
        
    }

    
}
