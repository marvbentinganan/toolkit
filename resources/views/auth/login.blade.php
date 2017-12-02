@extends('layouts.auth')
@section('title')
    Login | RCI I.T. Department Toolkit
@endsection
@section('content')
    <div class="ui segment">
        <div class="ui huge blue header">Riverside College Incorporated
            <div class="ui sub header">I.T. Department Toolkit</div>
        </div>
        <form action="" method="POST" class="ui form">
            {{ csrf_field() }}
            <div class="field">
                <div class="ui left icon input">
                    <input type="text" name="username" placeholder="Employee ID" autofocus>
                    <i class="ion-ios-contact icon"></i>
                </div>
            </div>
            <div class="field">
                <div class="ui left icon input">
                    <input type="password" name="password" placeholder="Password">
                    <i class="io-ios lock icon"></i>
                </div>
            </div>
            <div class="field">
                <button type="submit" class="ui fluid primary submit icon button"><i class="ion-ios-play icon"></i> Sign In</button>
            </div>
        </form>
    </div>
    
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
