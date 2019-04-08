@extends('layouts.master')

@section('title', 'View All Films')

@section('content')
    <h1>View All Patients</h1>
@foreach ($patients as $patient)
        <p>
            <a href="{{url('details/'.$patient->id)}}">{{$patient->firstname}} {{$patient->lastname}}</a>
        </p>
    @endforeach
@endsection
