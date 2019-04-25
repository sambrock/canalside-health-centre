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
                <div class="book-patient-details">
                    <span id="book-patient-name"></span>
                    <span id="book-patient-address"></span>
                    <span id="book-patient-contact"></span>
                </div>
            </div>
            <div class="form-control ">
                <label for="age">Date: <span class="example">E.g. 31 12 1970</span>
                </label>
                <div id="dob-controls">
                    <div class="dob-control {{$errors->has('day') ? 'error' : ''}}">
                        <input type="text" id="day" name="day" placeholder="DD" maxlength="2" value="{{ Carbon\Carbon::now()->day }}">
                    </div>
                    <div class="dob-control {{$errors->has('month') ? 'error' : ''}}">
                        <input type="text" id="month" name="month" placeholder="MM" maxlength="2" value="{{ Carbon\Carbon::now()->month }}">
                    </div>
                    <div class="dob-control {{$errors->has('year') ? 'error' : ''}}">
                        <input type="text" id="year" name="year" placeholder="YYYY" maxlength="4" value="{{ Carbon\Carbon::now()->year }}">
                    </div>
                </div>
                <span class="form-error">{{$errors->first('day')}}</span>
                <span class="form-error">{{$errors->first('month')}}</span>
                <span class="form-error">{{$errors->first('year')}}</span>
            </div>
            <div class="form-control-time">
                <div class="form-control {{$errors->has('start') ? 'error' : ''}}">
                    <label for="start">Start:</label>
                    <input type="time" value="13:00" step="900" name="start" id="start-time" min="09:00" max="13:00">
                    <span class="form-error">{{$errors->first('start')}}</span>
                </div>
                <div class="form-control {{$errors->has('end') ? 'error' : ''}}">
                    <label for="end">End:</label>
                    <input type="time" value="13:00" step="900" name="end" id="end-time" min="13:00" max="17:00">
                    <span class="form-error">{{$errors->first('end')}}</span>
                </div>
            </div>
            <div class="form-control {{$errors->has('notes') ? 'error' : ''}}" id="form-notes">
                <label for="notes">Notes:</label>
                <textarea id="notes-txtarea" name="notes" rows="7" cols="50" maxlength='500'>{{old('notes')}}</textarea>
                <span class="form-error">{{$errors->first('notes')}}</span>
                <span id="char-count">500</span>
            </div>
        </div>
        <div class="form-control {{$errors->has('doctor') ? 'error' : ''}}" id="form-book-doctor">
            <label for="doctor">Doctor:</label>
            <select name="doctor" id="book-doctor-select" >
                @foreach ($doctors as $doctor)
                <option value='{{$doctor->id}}'>{{$doctor->firstname}} {{$doctor->lastname}}</option>
                @endforeach
            </select>
            <span class="form-error">{{$errors->first('doctor')}}</span>
        </div>
        <input id="book-btn" type="submit" name="submitBtn" value="Book">
    </form>
</section>
@endsection
