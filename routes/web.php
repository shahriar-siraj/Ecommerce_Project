<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () 
{
   	Route::resource('/carts', 'CartController');

    Route::get('/control_panel', function ()
	{
	    return view('control_panel');
	});

	Route::get('/my_account', function ()
	{
	    return view('my_account');
	});

	Route::resource('/purchasedproducts', 'PurchasedproductController');

	Route::resource('/orders', 'ManageorderController');


});

Route::get('/', 'ProductController@index');

Route::resource('/products', 'ProductController');



Route::resource('/main_category_list', 'MainCategoryController');

Route::resource('/product_list', 'ProductListController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/aboutus', function ()
{
    return view('aboutus');
});

Route::get('/privacy-policy', function ()
{
    return view('privacy-policy');
});

Route::get('/terms-and-conditions', function ()
{
    return view('terms-and-conditions');
});

Route::get('/sidebar', function ()
{
    return view('layouts.sidebar');
});


