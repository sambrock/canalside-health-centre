@extends('layouts.master')
@section('title', 'Patients')
@section('content')
<section class="list">
    <div class="list-header">
        <h1>Patients</h1>
        <div class="list-search">
            <input type="text" placeholder="Search..." id="patient-search" value="">

        </div>
    </div>
    <div class="patients">
        <div class="patients-headers">
            <span class="patients-header-name">Name</span>
            <span class="patients-header-address">Address</span>
            <span class="patients-header-dob">DOB</span>
            <span class="patients-header-gender">Gender</span>
            <span class="patients-header-mobile">Contact</span>
        </div>
        <div class="patients-details">
            @foreach ($patients as $patient)
            <div class="patient">
                <span class="patient-name"><a href="details/{{$patient->id}}">{{$patient->firstname}} {{$patient->lastname}}</a></span>
                <span class="patient-address">{{$patient->address}}, {{$patient->postcode}}</span>
                <span class="patient-dob">{{ $patient->dob }}</span>
                <span class="patient-gender">{{$patient->gender}}</span>
                <span class="patient-mobile">{{$patient->mobile_number}}</span>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pagination-container">
        {!! $patients->links(); !!}
        <div class="results-count">
            Results: <span id="display-count">{{ $patients->total() }}</span>
        </div>
    </div>
</section>
@endsection
