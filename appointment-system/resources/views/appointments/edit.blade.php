@extends('dashboard')
@section('content')
<h1 class="text-2xl font-extrabold dark:text-black mb-2">Change your Appointment</h1>

@if(session()->has('warning'))
<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
    {{session('warning')}}
</div>
@endif


<form action="{{route('appointment.update',['appointment' => $appointment])}}" method="post" class="max-w-sm mx-auto">

    @csrf
    @method('put')
    <input name="date" type="datetime-local" step="3600" value="{{$appointment->date}}" class="mb-2 bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

</form>
@endsection
