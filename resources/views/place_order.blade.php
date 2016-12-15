@extends('layouts.app')
@section('title', 'Place Order | ')

@section('content')

<div class="container">
    <div class="row">
        <br/>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Place Order</div>
                <div class="panel-body">
                    {!! Form::open(array('route'=>'purchasedproducts.store')) !!}

                    {!! Form::text('userid', Auth::user()->id, ['class'=>'form-control hidden']) !!}
                    {!! Form::text('totalbill', $bill, ['class'=>'form-control hidden']) !!}
                    {!! Form::text('status', 'Unpaid', ['class'=>'form-control hidden']) !!}
                    
                    <div class="form-group">
                        {!! Form::label('total_bill', 'Total Bill') !!}
                        <br/>
                        ৳ {!! number_format((float)$bill, 2, '.', ''); !!} 
                    </div>

                    <div class="form-group">
                        {!! Form::label('payment_method', 'Payment Method') !!}
                        <br/>
                        {{ Form::radio('payment_method', 'Cash On Delivery', true) }}  Cash On Delivery <br/>
                        {{ Form::radio('payment_method', 'bKash') }} bKash 
                    </div>

                    <div class="form-group">
                        {!! Form::label('delivery_address', 'Delivery Address') !!}
                        {!! Form::text('delivery_address', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::button('Finish',['type'=>'Submit', 'class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection