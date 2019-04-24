@extends('layouts.master')
@section('title', 'Film details')
@section('content')
<div class="details-header">
    <h1>Details</h1>
    <a id="update-btn" href="{{ url('/') }}/update/{{ $patient->id }}">Update</a>
    <a id="delete-btn" href="{{ url('/') }}/delete/{{ $patient->id }}">Delete</a>
</div>

<div class="details-container">
    <section class="details-patient">
        <div class="details-patient-name">
            <h2>{{$patient->firstname}} {{$patient->lastname}}</h2>
        </div>
        <div class="details-gender">
            <span class="details-label">Gender:</span>
            <span>{{$patient->gender}}</span>
        </div>
        <div class="details-age">
            <span class="details-label">Age:</span>
            <span>{{ $age }}</span>
        </div>
        <div class="details-dob">
            <span class="details-label">DOB:</span>
            <span>{{ $patient->dob }}</span>
        </div>
        <div class="details-contact">
            <span class="details-label">Contact:</span>
            <span>{{$patient->mobile_number}}</span>
        </div>
        <div class="details-address">
            <span class="details-label">Address:</span>
            <span>{{$patient->address}}, {{$patient->postcode}}</span>
        </div>
        <div class="details-doctor">
            <span class="details-label">Doctor:</span>
            <span>Dr. {{$patient->doctor_firstname}} {{$patient->doctor_lastname}}</span>
        </div>
    </section>
    <section class="details-appointment">
    </section>
</div>
@endsection
