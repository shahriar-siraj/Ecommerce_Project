@extends('layouts.app')
@section('title','Cart | ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Cart</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-1">
                            <center><b>Image</b></center>
                        </div>
                        <div class="col-md-4">
                            <center><b>Title</b></center>
                        </div>
                        <div class="col-md-1">
                            <center><b>Quantity</b></center>
                        </div>
                        <div class="col-md-2">
                            <center><b>Price</b></center>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <hr/>
                    <?php $bill=0; ?>
                    @foreach($carts as $cart)
                    @if($cart->orderid == -1)
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{ $cart->product->images[0]->image }}" class="img-responsive thumbnail" />
                        </div>
                        <div class="col-md-4" style="margin-top: 6px;">
                            <center>{{ $cart->product->title }}</center>
                        </div>
                        <div class="col-md-1" style="margin-top: 6px;">
                            <center>{{ $cart->quantity }}</center>
                        </div>
                        <div class="col-md-2" style="margin-top: 6px;">
                            <center>৳ {!! number_format((float)$cart->product->price, 2, '.', ''); !!}</center>
                            <?php $bill += $cart->product->price*$cart->quantity; ?>
                        </div>
                        <div class="col-md-4">
                            {!! Form::open(array('route'=>['carts.destroy',$cart->cartid],'method'=>'DELETE')) !!}
                                {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <hr/>
                    <h4><b>Total Bill</b></h4>
                    ৳ {!! number_format((float)$bill, 2, '.', ''); !!}
                    
                    <br/><br/>
                    {{ link_to_route('purchasedproducts.create','Place Order', ['bill'=>$bill], ['class'=>'btn btn-primary']) }}
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
