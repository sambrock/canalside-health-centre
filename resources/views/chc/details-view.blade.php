@extends('layouts.master')
@section('title', 'Film details')
@section('content')
<h1>{{$patient->firstname}} {{$patient->lastname}}</h1>
<ul>
    <li>Gender: {{$patient->gender}}</li>
    <li>Address: {{$patient->address}}</li>
    <li>Mobile number: {{$patient->mobile_number}}</li>
</ul>
@endsection
