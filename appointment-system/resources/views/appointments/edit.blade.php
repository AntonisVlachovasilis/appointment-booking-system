<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Change your Appointment</h1>
    <form action="{{route('appointment.update',['appointment' => $appointment])}}" method="post">
        @csrf
        @method('put')
        <input name="date" type="datetime-local" step="3600" value="{{$appointment->date}}">
        <input type="submit">
    </form>
</body>
</html>
