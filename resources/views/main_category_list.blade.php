@extends('layouts.sidebar')

@section('inner_panel')

<div class="panel panel-default">
    <div class="panel-heading">Main Category List</div>
    <div class="panel-body">
        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
        @foreach($categories as $category)
        <div class="col-md-6">{!! $category->name !!}</div>
        <div class="col-md-6">
            {!! Form::open(array('route'=>['main_category_list.destroy',$category->id],'method'=>'DELETE')) !!}
                {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
            {!! Form::close() !!}
        </div>
        <br/><br/>
        @endforeach
    </div>
</div>
@endsection