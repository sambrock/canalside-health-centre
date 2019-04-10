@extends('layouts.master')
@section('title', 'Create Film')
@section('content')

<section class="register">
    <h1>Register patient</h1>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{url('save')}}" method="POST" class="register-form">
        {{ csrf_field() }}
        <h3>Patient details</h3>
        <div class="form-controls">
            <div class="form-control">
                <label for="firstname">First name:</label>
                <input type="text" id="firstname" name="firstname">
            </div>
            <div class="form-control">
                <label for="lastname">Last name:</label>
                <input type="text" id="lastname" name="lastname">
            </div>
            <div class="form-control" id="address">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-control">
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" value="{{old('postcode')}}">
            </div>
            <div class="form-control">
                <label for="mobile">Mobile number:</label>
                <input type="text" id="mobile" name="mobile">
            </div>
            <div class="form-control">
                <label for="age">Date of birth: <span class="example">E.g. 31 12 1970</span></label>
                <div id="dob-controls">
                    <div class="dob-control">
                        <input type="text" id="day" name="day" placeholder="DD">
                    </div>
                    <div class="dob-control">
                        <input type="text" id="month" name="month" placeholder="MM">
                    </div>
                    <div class="dob-control">
                        <input type="text" id="year" name="year" placeholder="YYYY">
                    </div>
                </div>
            </div>
            <div class="form-control">
                <label for="gender">Gender:</label>
                <div id="gender-controls">
                    <label><input type="radio" name="gender" value="male" class="form-radio">Male</label>
                    <label><input type="radio" name="gender" value="female" class="form-radio">Female</label>
                    <label><input type="radio" name="gender" value="other" class="form-radio">Other</label>
                </div>
            </div>
        </div>
        <h3>Doctor details</h3>
        <div class="form-control">
            <label for="gender">Doctor:</label>
            <input type="text" id="gender" name="gender">
        </div>
        <input type="submit" name="submitBtn" value="Add Patient">
    </form>
</section>
@endsection
