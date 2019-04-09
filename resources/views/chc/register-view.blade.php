@extends('layouts.master')
@section('title', 'Create Film')
@section('content')

@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{url('save')}}" method="POST">
    {{ csrf_field() }}
    <h1>Register patient</h1>
    <label for="firstname">First name:</label>
    <input type="text" id="firstname" name="firstname">
    <br>
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname">
    <br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address">
    <br>
    <label for="postcode">Postcode:</label>
    <input type="text" id="postcode" name="postcode" value="{{old('postcode')}}">
    <br>
    <label for="mobile">Mobile number:</label>
    <input type="text" id="mobile" name="mobile">
    <br>
    <label for="gender">Gender:</label>
    <input type="text" id="gender" name="gender">
    <br>
    <input type="submit" name="submitBtn" value="Add Patient">
</form>
@endsection
