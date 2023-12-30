<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Appointment Booking System</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>appointment_id</th>
                    <th>user_email</th>
                    <th>date</th>
                    <th>options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment )
                <tr>
                    <td>{{$appointment->id}}</td>
                    <td>#</td>
                    <td>{{$appointment->date}}</td>
                    <td>
                        <button>edit</button>
                        <button>delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>
