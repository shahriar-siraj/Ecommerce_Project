@extends('layouts.app')
@section('title', '')

@section('content')

<div class="container">
    <div class="row">
        <br/>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Latest Products</div>
                <div class="panel-body">
                    
                    <div class="container">
                        <div class="row">
                            <?php $i=0; ?>
                            @foreach($products as $product)
                            <?php $i++; ?>
                            <div class="col-md-3">
                                <div class="product">
                                    <a href="{{ route('products.show', [$product->id]) }}">
                                        <img src="{!! $product->images[0]->image !!}" alt="" />
                                        <div class="caption">
                                            {!! $product->title !!} <br/>
                                            ৳ {!! number_format((float)$product->price, 2, '.', ''); !!}
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php if($i%4 == 0) 
                            {?>
                                </div>
                            </div>
                            <br/>
                            <div class="container">
                                <div class="row">
                            <?php } ?>
                            @endforeach                                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection