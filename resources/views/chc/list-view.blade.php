@extends('layouts.master')

@section('title', 'View All Films')

@section('content')
<section class="list">
    <div class="list-header">
        <h1>Patients</h1>
        <div class="list-search">
            <span>Search: </span>
            <input type="text" placeholder="Patient name...">
        </div>

    </div>
    <div class="patinents">
        <div class="patients-headers">
            <span class="patients-header-name">Name</span>
            <span class="patients-header-address">Address</span>
            <span class="patients-header-mobile">Mobile</span>
            <span class="patients-header-doctor">Doctor</span>
        </div>
        <div class="patients-details">
            @foreach ($patients as $patient)
            <div class="patient">
                <span class="patient-name"><a href="patients/details/{{$patient->id}}">{{$patient->lastname}}, {{$patient->firstname}}</a></span>
                <span class="patient-address">{{$patient->address}}, {{$patient->postcode}}</span>
                <span class="patient-mobile">{{$patient->mobile_number}}</span>
                @foreach ($doctors as $doctor)
                @if (($doctor->id)===($patient->doctor_id))
                <span class="patient-doctor">Dr. {{$doctor->firstname}} {{$doctor->lastname}}</span>
                @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
