<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
