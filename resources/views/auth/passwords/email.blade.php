@extends('auth.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
    <div class="msg">Forgot Password</div>
    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <span class="input-group-addon">
            <i class="material-icons">email</i>
        </span>
        <div class="form-line {{ $errors->has('name') ? ' error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email Address" required>
        </div>    
        @if ($errors->has('email'))
            <label id="email-error" class="error" for="email">{{ $errors->first('email') }}</label>
        @endif
    </div>
     <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-block btn-lg bg-red waves-effect" type="submit">Reset Password</button>
        </div>
    </div>
</form>
@endsection
