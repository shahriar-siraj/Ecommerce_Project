@extends('layouts.sidebar')

@section('inner_panel')

<div class="panel panel-default">
    <div class="panel-heading">Product List</div>
    <div class="panel-body">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        @foreach($products as $product)
        <div class="col-md-2">
            @foreach($images as $image)
            <div class="col-md-12">
                <img src="{!! $image->image !!}" class="img-responsive"/>
            </div>
            @endforeach
        </div>
        <div class="col-md-2">{!! $product->title !!}</div>
        <div class="col-md-1">{!! $product->price !!}</div>
        <div class="col-md-1">{!! $brands[0]->name !!}</div>
        <div class="col-md-2">
            @foreach($sizes as $size)
            <div class="col-md-6">
                {!! $size->name !!}
            </div>
            <div class="col-md-6">
                {!! $size->quantity !!}
            </div>
            @endforeach
        </div>
        <div class="col-md-2">{!! $categories[0]->name !!}</div>
        <div class="col-md-2">{!! $subcategories[0]->name !!}</div>
        <br/><br/>
        @endforeach
    </div>
</div>
@endsection