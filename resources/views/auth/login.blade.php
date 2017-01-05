@extends('layout')

@section('content')
<div class="container">
    <div class="row">    
        <div class="col-sm-8 offset-md-2">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Login</h4>
                </div>
                <div class="card-block">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="text-right form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="form-control-label col-sm-4" for="email">E-Mail Address</label>
                        <div class="col-sm-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' form-control-error' : '' }}" name="email" value="{{old('email')}}" required autofocus>
                        </div>
                    </div>

                    <div class="text-right form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="form-control-label col-sm-4" for="password">Password</label>
                        <div class="col-sm-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' form-control-error' : '' }}" name="password" value="{{old('password')}}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-outline-primary">
                                Login
                            </button>

                            <a class="btn btn-outline-danger" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
