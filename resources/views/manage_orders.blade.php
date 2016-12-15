@extends('layouts.app')
@section('title','Manage Orders | ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Manage Orders</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-1">
                            <center><b>ID</b></center>
                        </div>
                        <div class="col-md-2">
                            <center><b>User Name</b></center>
                        </div>
                        <div class="col-md-2">
                            <center><b>Total Bill</b></center>
                        </div>
                        <div class="col-md-2">
                            <center><b>Payment Method</b></center>
                        </div>
                        <div class="col-md-2">
                            <center><b>Delivery Address</b></center>
                        </div>
                        <div class="col-md-1">
                            <center><b>Status</b></center>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <hr/>
                    <?php $bill=0; ?>
                    @foreach($purchasedproducts as $p)
                    <div class="row">
                        <div class="col-md-1">
                            <center>{{ $p->orderid }}</center>
                        </div>
                        <div class="col-md-2">
                            <center>{{ $p->user->name }}</center>
                        </div>
                        <div class="col-md-2">
                            <center>৳ {!! number_format((float)$p->totalbill, 2, '.', ''); !!}</center>
                        </div>
                        <div class="col-md-2">
                            <center>{{ $p->payment_method }}</center>
                        </div>
                        <div class="col-md-2">
                            <center>{{ $p->delivery_address }}</center>
                        </div>
                        <div class="col-md-1">
                            <center>{{ $p->status }}</center>
                        </div>
                        <div class="col-md-2" style="margin-top: -5px;">
                            @if($p->status=='Unpaid')
                                {{ link_to_route('orders.create','Got Paid', ['id'=>$p->orderid], ['class'=>'btn btn-success']) }}
                            @endif
                        </div>
                    </div>
                    <br/>
                    @endforeach
                    <hr/>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
