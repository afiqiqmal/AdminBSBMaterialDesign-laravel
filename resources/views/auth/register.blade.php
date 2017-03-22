@extends('auth.app')

@section('content')
<form id="sign_in" role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="msg">Register</div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">person</i>
        </span>
        <div class="form-line {{ $errors->has('name') ? ' error' : '' }}">
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Username" required autofocus>
        </div>
        @if ($errors->has('email'))
            <label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
        @endif
    </div>
    <div class="input-group">
        <span class="input-group-addon">
        <i class="material-icons">email</i>
        </span>
        <div class="form-line {{ $errors->has('email') ? ' error' : '' }}">
            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address" required autofocus>
        </div>
        @if ($errors->has('email'))
            <label id="email-error" class="error" for="email">{{ $errors->first('email') }}</label>
        @endif
    </div>
    <div class="input-group">
        <span class="input-group-addon">
        <i class="material-icons">lock</i>
        </span>
        <div class="form-line {{ $errors->has('password') ? ' error' : '' }}">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        @if ($errors->has('password'))
            <label id="password-error" class="error" for="name">{{ $errors->first('password') }}</label>
        @endif
    </div>
    <div class="input-group">
        <span class="input-group-addon">
        <i class="material-icons">lock</i>
        </span>
        <div class="form-line">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
        </div>
    </div>
    <div class="form-group">
        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Register</button>
        </div>
    </div>
    <div class="m-t-25 m-b--5 align-center">
        <a href="{{route('login')}}">You already have a membership?</a>
    </div>
</form>
@endsection
