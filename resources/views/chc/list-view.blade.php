@extends('layouts.master')

@section('title', 'Patients')

@section('content')
<section class="list">
    <div class="list-header">
        <h1>Patients</h1>
        <div class="list-search">
            <input type="text" placeholder="Search..." id="patient-search" value="">
            <span id="patient-count">{{ $patient_count }} / {{ $patient_all_count }}</span>
        </div>

    </div>
    <div class="patients">
        <div class="patients-headers">
            <span class="patients-header-name">Name</span>
            <span class="patients-header-address">Address</span>
            <span class="patients-header-mobile">Mobile</span>
        </div>
        <div class="patients-details">
            @foreach ($patients as $patient)
            <div class="patient">
                <span class="patient-name"><a href="patients/details/{{$patient->id}}">{{$patient->lastname}}, {{$patient->firstname}}</a></span>
                <span class="patient-address">{{$patient->address}}, {{$patient->postcode}}</span>
                <span class="patient-mobile">{{$patient->mobile_number}}</span>
                <span class="patient-age">{{$patient->dob}}</span>
                <span class="patient-gender">{{$patient->gender}}</span>
            </div>
            @endforeach
        </div>
    </div>
    <span id="#name"></span>
</section>
@endsection
