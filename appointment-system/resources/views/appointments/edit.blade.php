@extends('dashboard')
@section('content')
<h1>Change your Appointment</h1>
<form action="{{route('appointment.update',['appointment' => $appointment])}}" method="post">
    @csrf
    @method('put')
    <input name="date" type="datetime-local" step="3600" value="{{$appointment->date}}">
    <input type="submit">
</form>
@endsection
