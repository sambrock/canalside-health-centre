@extends('layouts.master')
@section('title', 'Select Films to Delete')
@section('content')

<form action="{{url('delete')}}" method="POST">
    {{ csrf_field() }}
     @foreach ($patients as $patient)
        <div>
            <label>{{$patient->lastname}}</label>
            <input type='checkbox' value='{{$patient->id}}' name='patients[]'/>
        </div>
    @endforeach
    <input type="submit" name="submitBtn" value="Delete Films">
</form>

@endsection
