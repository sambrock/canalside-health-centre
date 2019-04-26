@extends('layouts.master')
@section('title', 'Details')
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
            <span>{{ Carbon\Carbon::parse($patient->dob)->age }}</span>
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
        <div class="appointments">
            <div class="appointments-headers">
                <span class="appointments-header-date">Date</span>
                <span class="appointments-header-start">Start</span>
                <span class="appointments-header-end">End</span>
                <span class="appointments-header-notes">Notes</span>
                <span class="appointments-header-status">Status</span>
            </div>
            <div class="appointments-details">
                @foreach ($appointments as $appointment)
                <div class="appointment">
                    <span class="appointment-date">{{$appointment->date}}</span>
                    <span class="appointment-start">{{\Carbon\Carbon::parse($appointment->start)->format('H:i')}}</span>
                    <span class="appointment-end">{{\Carbon\Carbon::parse($appointment->end)->format('H:i')}}</span>
                    <span class="appointment-notes">{{$appointment->notes}}</span>
                    <div class="appointment-status">
                        @if($appointment->status === 1)
                        <span class="appointment-due">Due</span>
                        @elseif($appointment->status === 2)
                        <span class="appointment-in-progress">In progress</span>
                        @elseif($appointment->status === 3)
                        <span class="appointment-complete">Complete</span>

                        @endif
                    </div>
                    @if($appointment->status === 1)
                    <a href="{{url('cancel')}}/{{$appointment->id}} " id="cancel-btn">cancel</a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        <div class="pagination-container">
            {!! $appointments->links(); !!}
            <div class="results-count">
                Results: <span id="display-count">{{ $appointments->total() }}</span>
            </div>
        </div>

    </section>
</div>
@endsection
