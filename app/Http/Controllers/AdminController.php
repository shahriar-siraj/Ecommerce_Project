<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function main_category_list()
    {
        $categories= DB::table('categories')->get();
        return view('main_category_list',compact('categories'));
    }
    
    public function delete_main_category()
    {
                //$id->delete();
//        return redirect()->url('main_category_list');
        return view('main_category_list');

    }

}
