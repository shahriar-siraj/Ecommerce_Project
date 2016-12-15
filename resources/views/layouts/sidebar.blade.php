@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Control Panel | KenaKata.com | Largest Online Shopping Site in Bangladesh</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @section('content')
    
            <div class="container">
                <div class="row">
                    <br/>
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">{{$view_name}} </div>
                            <div class="panel-body" style="padding: 0;">
                                    <div class="col-md-2 sidebar" style="padding: 0;">
                                        <ul class="nav nav-sidebar">
                                            <li class="group">Manage Products</li>
                                            <li class="active"><a href="{!! route('product_list.index') !!}">Product List</a></li>
                                            <li><a>Add New Products</a></li>
                                            <li><a>Add Supply</a></li>
                                            <li><a>Edit Products</a></li>
                                            <li><a>Delete Products</a></li>
                                            <li class="group">Manage Categories</li>
                                            <li><a href="{!! route('main_category_list.index') !!}">Main Category List</a></li>
                                            <li><a>Sub Category List</a></li>
                                            <li><a>Add New Main Category</a></li>
                                            <li><a>Add New Sub Category</a></li>
                                            <li class="group">Manage Customers</li>
                                            <li><a>Customer List</a></li>
                                            <li class="group">Manage Orders</li>
                                            <li><a>Paid Orders</a></li>
                                            <li><a>Unpaid Orders</a></li>

                                        </ul>
                                    </div>
                                <div class="col-md-10">
                                    <br/>
                                    @yield('inner_panel')
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endsection
        </div>
    </body>
</html>
