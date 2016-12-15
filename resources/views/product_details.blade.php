@extends('layouts.app')
<!-- <title>{!! $product->title !!}</title> -->

@section('content')
<div class="container">
    <div class="row">
        <br/>
        <div class="col-md-12">
            <div class="col-md-1 col-xs-4">
                @foreach($product->images as $image)
                <img class="img-thumbnail pd-image small-thumb" src="{!! $image->image !!}" />
                @endforeach
            </div>
            <div class="col-md-6">
                <img id="thumbnail" class="img-thumbnail pd-image" src="{!! $product->images[0]->image !!}" />
            </div>
            <div class="col-md-5"> 
                {!! Form::open(array('route'=>'carts.store')) !!}
                
                <?php $userid=null;
                    if (Auth::check()) 
                    {
                        $userid=Auth::user()->id;
                    }
                ?>

                {!! Form::text('userid', $userid, ['class'=>'form-control hidden']) !!}
                {!! Form::text('productid', $product->id, ['class'=>'form-control hidden']) !!}
                {!! Form::text('orderid', -1, ['class'=>'form-control hidden']) !!}
                <div class="pd-title">{!! $product->title !!}</div>
                {!! $product->brand->name !!}<br/> <br/>
                <div class="pd-price">
                    ৳ {!! number_format((float)$product->price, 2, '.', ''); !!}
                </div>
                <hr/>
                <!-- Size<br/>
                @foreach($product->sizes as $size)
                    <button class="btn btn-default">{!! $size->name !!}</button>
                @endforeach -->
                <br/>Quantity <br/>
                <div class="form-group">
                    <div class="col-xs-3" style="padding: 0;">
                        <input type="number" class="form-control" value="1" id="quantity" name="quantity">
                    </div>
                </div>
                <br/><br/>
                    {!! Form::button('Add to cart',['type'=>'Submit', 'class'=>'btn pd-cart']) !!}
               {!! Form::close() !!}
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Description</div>
                <div class="panel-body">{!! $product->description !!}</div>
            </div>
        </div>
        <!-- <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Reviews</div>
                <div class="panel-body">
                    
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="review" class="col-md-12">Write a review</label>

                            <div class="col-md-12">
                                <textarea class="form-control" rows="3" id="review"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
            <div class="panel-heading">Similar Products</div>
                <div class="panel-body">
                    @foreach($product->subcategory->products as $product)
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

                    @endforeach                                        
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
                