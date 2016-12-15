@extends('layouts.app')
@extends('layouts.head')

<title>Reset Password | KenaKata.com | Largest Online Shopping Site in Bangladesh</title>

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <br/>
        <div class="col-md-12">
            <div class="panel panel-primary">                
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <br/><br/>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-6">
                    <br/><label class="col-md-12 control-label">Not a member? Register now.</label>
                    <br/><a class="btn btn-primary" style="margin-left: 10px;" href="{{ url('/register') }}">Register</a>
                    <br/><br/><br/><label class="col-md-12 control-label">Already a member? Log in now.</label>
                    <br/><a class="btn btn-primary" style="margin-left: 10px;" href="{{ url('/login') }}">Login</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
