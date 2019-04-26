@extends('layouts.master')
@section('title', 'Update')
@section('content')

<section class="register">
    <h1>Update patient</h1>
    <form action="{{url('save/update')}}/{{ $patient->patient_id }}" method="POST" class="register-form">
        {{ csrf_field() }}
        <div class="form-controls">
            <div class="form-control {{$errors->has('firstname') ? 'error' : ''}}">
                <label for="firstname ">First name:</label>
                <input type="text" id="firstname" name="firstname" value="{{$patient->firstname}}">
                <span class="form-error">{{$errors->first('firstname')}}</span>
            </div>
            <div class="form-control {{$errors->has('lastname') ? 'error' : ''}}">
                <label for="lastname">Last name:</label>
                <input type="text" id="lastname" name="lastname" value="{{$patient->lastname}}">
                <span class="form-error">{{$errors->first('lastname')}}</span>
            </div>
            <div class="form-control {{$errors->has('address') ? 'error' : ''}}" id="address" >
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{$patient->address}}">
                <span class="form-error">{{$errors->first('address')}}</span>
            </div>
            <div class="form-control {{$errors->has('postcode') ? 'error' : ''}}">
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" value="{{$patient->postcode}}">
                <span class="form-error">{{$errors->first('postcode')}}</span>
            </div>
            <div class="form-control {{$errors->has('mobile') ? 'error' : ''}}" >
                <label for="mobile">Mobile number:</label>
                <input type="text" id="mobile" name="mobile" value="{{$patient->mobile_number}}">
                <span class="form-error">{{$errors->first('mobile')}}</span>
            </div>
            <div class="form-control ">
                <label for="age">Date of birth: <span class="example">E.g. 31 12 1970</span>
                </label>
                <div id="dob-controls">
                    <div class="dob-control {{$errors->has('day') ? 'error' : ''}}">
                        <input type="text" id="day" name="day" placeholder="DD" maxlength="2" value="{{ Carbon\Carbon::parse($patient->dob)->format('d') }}">
                    </div>
                    <div class="dob-control {{$errors->has('month') ? 'error' : ''}}">
                        <input type="text" id="month" name="month" placeholder="MM" maxlength="2" value="{{ Carbon\Carbon::parse($patient->dob)->format('m') }}">
                    </div>
                    <div class="dob-control {{$errors->has('year') ? 'error' : ''}}">
                        <input type="text" id="year" name="year" placeholder="YYYY" maxlength="4" value="{{ Carbon\Carbon::parse($patient->dob)->format('Y') }}">
                    </div>
                </div>
                <span class="form-error">{{$errors->first('day')}}</span>
                <span class="form-error">{{$errors->first('month')}}</span>
                <span class="form-error">{{$errors->first('year')}}</span>
            </div>
            <div class="form-control">
                <label for="gender">Gender:</label>
                <div class="gender-controls {{$errors->has('gender') ? 'error' : ''}}">
                    <label><input type="radio" name="gender" value="male" class="form-radio"
                                  {{ $patient->gender == 'male' ? 'checked' : '' }}
                                  >Male</label>
                    <label><input type="radio" name="gender" value="female" class="form-radio"
                                  {{ $patient->gender == 'female' ? 'checked' : '' }}
                                  >Female</label>
                    <label><input type="radio" name="gender" value="other" class="form-radio"
                                  {{ $patient->gender == 'other' ? 'checked' : '' }}
                                  >Other</label>
                </div>
                <span class="form-error">{{$errors->first('gender')}}</span>
            </div>
        </div>
        <div class="form-control {{$errors->has('doctor') ? 'error' : ''}}" id="form-register-doc">
            <label for="doctor">Doctor:</label>
            <select name="doctor" >
                <option value='{{$patient->doctor_id}}' selected>{{$patient->doctor_firstname}} {{$patient->doctor_lastname}}</option>
                @foreach ($doctors as $doctor)
                @if ($doctor->id != $patient->doctor_id)
                <option value='{{$doctor->id}}'>{{$doctor->firstname}} {{$doctor->lastname}}</option>
                @endif
                @endforeach
            </select>
            <span class="form-error">{{$errors->first('doctor')}}</span>
        </div>
        <input id="register-btn" type="submit" name="submitBtn" value="Register">
    </form>
</section>
@endsection
