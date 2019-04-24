@extends('layouts.master')
@section('title', 'Book')
@section('content')

<section class="book">
    <h1>Book appointment</h1>
    <form action="{{url('save/register')}}/register" method="POST" class="register-form">
        {{ csrf_field() }}
        <div class="form-controls">
            <div class="form-control {{$errors->has('firstname') ? 'error' : ''}}" id="form-patient-id">
                <div>
                    <label for="patient_id">Patient ID:</label>
                    <input type="text" id="patient_id" name="patient_id" value="{{old('patient_id')}}">
                    <span class="form-error">{{$errors->first('patient_id')}}</span>
                </div>
                <div>
                    <span>Firstname</span> <span>lastname</span>
                </div>
            </div>
            <div class="form-control ">
                <label for="age">Date: <span class="example">E.g. 31 12 1970</span>
                </label>
                <div id="dob-controls">
                    <div class="dob-control {{$errors->has('day') ? 'error' : ''}}">
                        <input type="text" id="day" name="day" placeholder="DD" maxlength="2" value="{{old('day')}}">
                    </div>
                    <div class="dob-control {{$errors->has('month') ? 'error' : ''}}">
                        <input type="text" id="month" name="month" placeholder="MM" maxlength="2" value="{{old('month')}}">
                    </div>
                    <div class="dob-control {{$errors->has('year') ? 'error' : ''}}">
                        <input type="text" id="year" name="year" placeholder="YYYY" maxlength="4" value="{{old('year')}}">
                    </div>
                </div>
                <span class="form-error">{{$errors->first('day')}}</span>
                <span class="form-error">{{$errors->first('month')}}</span>
                <span class="form-error">{{$errors->first('year')}}</span>
            </div>
            <div class="form-control-time">
                <div class="form-control {{$errors->has('start') ? 'error' : ''}}">
                    <label for="start">Start:</label>
                    <input type="time" value="13:00" step="900" name="start">
                    <span class="form-error">{{$errors->first('start')}}</span>
                </div>
                <div class="form-control {{$errors->has('end') ? 'error' : ''}}">
                    <label for="end">End:</label>
                    <input type="time" value="13:00" step="900" name="end">
                    <span class="form-error">{{$errors->first('end')}}</span>
                </div>
            </div>

            <div class="form-control {{$errors->has('postcode') ? 'error' : ''}}">
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" value="{{old('postcode')}}">
                <span class="form-error">{{$errors->first('postcode')}}</span>
            </div>
            <div class="form-control {{$errors->has('mobile') ? 'error' : ''}}" >
                <label for="mobile">Mobile number:</label>
                <input type="text" id="mobile" name="mobile" value="{{old('mobile')}}">
                <span class="form-error">{{$errors->first('mobile')}}</span>
            </div>

            <div class="form-control">
                <label for="gender">Gender:</label>
                <div class="gender-controls {{$errors->has('gender') ? 'error' : ''}}">
                    <label><input type="radio" name="gender" value="male" class="form-radio">Male</label>
                    <label><input type="radio" name="gender" value="female" class="form-radio">Female</label>
                    <label><input type="radio" name="gender" value="other" class="form-radio">Other</label>
                </div>
                <span class="form-error">{{$errors->first('gender')}}</span>
            </div>
        </div>
        <h3>Doctor details</h3>
        <input id="register-btn" type="submit" name="submitBtn" value="Register">
    </form>
</section>
@endsection
