@extends('layouts.master')
@section('title', 'Patients')
@section('content')
<section class="list">
    <div class="list-header">
        <h1>Appointments</h1>
    </div>
    <div class="appointments">
        <div class="appointments-headers">
            <span class="appointments-header-date">Date</span>
            <span class="appointments-header-start">Start</span>
            <span class="appointments-header-end">End</span>
            <span class="appointments-header-patient">Patient</span>
            <span class="appointments-header-notes">Notes</span>
            <span class="appointments-header-status">Status</span>
        </div>
        <div class="appointments-details">
            @foreach ($appointments as $appointment)
            <div class="appointment">
                <span class="appointment-date">{{$appointment->date}}</span>
                <span class="appointment-start">{{\Carbon\Carbon::parse($appointment->start)->format('H:i')}}</span>
                <span class="appointment-end">{{\Carbon\Carbon::parse($appointment->end)->format('H:i')}}</span>
                <span class="appointment-patient">{{$appointment->firstname}} {{$appointment->lastname}}</span>
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
                <a href="cancel/{{$appointment->appointment_id}}" id="cancel-btn">cancel</a>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <div class="pagination-container">
        {!! $appointments->links(); !!}
        <div class="results-count">
            Appointments: <span id="display-count">{{ $appointments->total() }}</span>
        </div>
    </div>
</section>
@endsection
