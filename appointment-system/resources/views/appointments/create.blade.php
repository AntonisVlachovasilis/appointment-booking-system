@extends('dashboard')
@section('content')

<h1>Create new Appointment</h1>
<div>
    @if(session()->has('error'))
    <div>
        {{session('error')}}
    </div>
    @endif
</div>
<form action="{{route('appointment.store')}}" method="post">
    @csrf
    @method('post')
    <input name="date" type="datetime-local" step="3600">
    <input type="submit">
</form>
@endsection
