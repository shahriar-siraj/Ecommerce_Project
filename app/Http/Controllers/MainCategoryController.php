<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainCategoryController extends Controller
{
    public function index()
    {
        $categories= DB::table('categories')->get();
        return view('main_category_list',compact('categories'));
    }
    
    public function destroy($id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('main_category_list.index')->with('message','Category has been deleted successfully!');
    }
}
