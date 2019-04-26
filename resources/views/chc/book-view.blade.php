@extends('layouts.master')
@section('title', 'Book')
@section('content')

<section class="book">
    <h1>Book appointment</h1>
    <form action="{{url('book-appointment')}}" method="POST" class="book-form">
        {{ csrf_field() }}
        <div class="form-controls">
            <div class="form-control {{$errors->has('patient_id') ? 'error' : ''}}" id="form-patient-id">
                <div>
                    <label for="patient_id">Patient ID:</label>
                    <input type="text" id="patient_id" name="patient_id" value="{{old('patient_id')}}">
                    <span class="form-error">{{$errors->first('patient_id')}}</span>
                </div>
                <div class="book-patient-details">
                    <span id="book-patient-name"></span>
                    <span id="book-patient-address"></span>
                    <span id="book-patient-contact"></span>
                    <span id="book-patient-error" style="display: none;">No patient found.</span>
                </div>
            </div>
            <div class="form-control  {{$errors->has('date') ? 'error' : ''}}" id="form-book-date">
                <label for="age">Date: <span class="example">E.g. 31 12 1970</span>
                </label>
               <input type="date" id="date" name="date" value="{{ old('date', \Carbon\Carbon::today()->toDateString()) }}">
                <span class="form-error">{{$errors->first('date')}}</span>
            </div>
            <div class="form-control-time">
                <div class="form-control {{$errors->has('start') ? 'error' : ''}}">
                    <label for="start">Start:</label>
                    <input type="time" value="{{ old('start', '09:00') }}" step="900" name="start" id="start-time" min="09:00" max="17:00">
                    <span class="form-error">{{$errors->first('start')}}</span>
                </div>
                <div class="form-control {{$errors->has('end') ? 'error' : ''}}">
                    <label for="end">End:</label>
                    <input type="time" value="{{ old('end', '17:00') }}" step="900" name="end" id="end-time" min="09:00" max="17:00">
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
        <div class="form-control" id="form-book-doctor">
            <label for="doctor">Doctor:</label>
            <select name="doctor_id" id="book-doctor-select" >
                @foreach ($doctors as $doctor)
                <option value='{{$doctor->id}}'>{{$doctor->firstname}} {{$doctor->lastname}}</option>
                @endforeach
            </select>
            <span class="form-error" style="display: none;">This doctor is not available for that time slot.</span>
        </div>
        <input id="book-btn" type="submit" name="submitBtn" value="Book" >
    </form>
</section>
@endsection
