@extends('layouts.master')
@section('title', 'Login')
@section('sidebar')
@stop
@section('content')

<h1>Login</h1>
<form id="login-form" method="POST" action="{{ url('login/check') }}">
    {{ csrf_field() }}
    <div class="form-control {{ $errors->has('id') ? ' has-error' : '' }}">
        <label for="id" class="col-md-4 control-label">User ID</label>
        <input id="user-id" type="text" name="id" value="{{ old('id') }}" required>
        @if ($errors->has('email'))
        <strong>{{ $errors->first('id') }}</strong>
        @endif
    </div>
    <div class="form-control {{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        @if ($errors->has('password'))
        <strong>{{ $errors->first('password') }}</strong>
        @endif
    </div>
    <div class="form-control">
        <button type="submit" id="login-btn">
            Login
        </button>
    </div>
</form>


@endsection
