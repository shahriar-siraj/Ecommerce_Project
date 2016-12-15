@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{!! $product->title !!}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">{!! $product->title !!}</div>
                            <div class="panel-body">
                                {!! $product->price !!} Taka
                                
                                {!! Form::model($product,array('route'=>['products.update',$product->id],'method'=>'PUT')) !!}

                                <div class="form-group">
                                    {!! Form::label('title', 'Enter Title') !!}
                                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::label('price', 'Enter Price') !!}
                                    {!! Form::text('price', null, ['class'=>'form-control']) !!}
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::button('Update',['type'=>'Submit', 'class'=>'btn btn-primary']) !!}
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
