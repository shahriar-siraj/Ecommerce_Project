@extends('layouts.app')
@section('title','Order History | ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Order History</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-1">
                            <center><b>ID</b></center>
                        </div>
                        <div class="col-md-2">
                            <center><b>Total Bill</b></center>
                        </div>
                        <div class="col-md-3">
                            <center><b>Payment Method</b></center>
                        </div>
                        <div class="col-md-4">
                            <center><b>Delivery Address</b></center>
                        </div>
                        <div class="col-md-2">
                            <center><b>Status</b></center>
                        </div>
                    </div>
                    <hr/>
                    <?php $bill=0; ?>
                    @foreach($purchasedproducts as $p)
                    @if($p->userid == Auth::user()->id)
                    <div class="row">
                        <div class="col-md-1">
                            <center>{{ $p->orderid }}</center>
                        </div>
                        <div class="col-md-2">
                            <center>৳ {!! number_format((float)$p->totalbill, 2, '.', ''); !!}</center>
                        </div>
                        <div class="col-md-3">
                            <center>{{ $p->payment_method }}</center>
                        </div>
                        <div class="col-md-4">
                            <center>{{ $p->delivery_address }}</center>
                        </div>
                        <div class="col-md-2">
                            <center>{{ $p->status }}</center>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <hr/>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
