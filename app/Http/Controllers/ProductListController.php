<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductListController extends Controller
{
    public function index()
    {
        $products = DB::select('select id, title, price from products');
        $images = DB::select('select image from products, images where products.id=images.productid');
        $brands = DB::select('select name from products, brands where products.brandid=brands.id');
        $sizes = DB::select('select name, quantity from products, sizes where products.id=sizes.productid');
        $subcategories = DB::select('select name from products, subcategories where products.subcatid=subcategories.id');
        $categories = DB::select('select categories.name from categories, subcategories where categories.id=subcategories.id');
        return view('product_list',compact('products','images', 'brands', 'sizes', 'subcategories', 'categories'));
    }
    
    public function destroy($id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route('product_list.index')->with('message','Product has been deleted successfully!');
    }
}
