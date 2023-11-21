<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Appointments</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('appointments.create1')}}">Book Appointment</a>
        </div>
        <table border="1">
            <tr>
                <th>Queing Number</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Service Type</th>
                <th>Concern Details</th>
                <th>Contact Number</th>
            </tr>
            @foreach($appointments as $appointment )
                <tr>
                    <td>{{$appointment->queue_number}}</td>
                    <td>{{$appointment->suffix_name}} {{$appointment->last_name}}, {{$appointment->first_name}} {{$appointment->middle_name}}</td>
                    <td>{{$appointment->gender}}</td>
                    <td>{{$appointment->birth_date}}</td>
                    <td>{{$appointment->service_type}}</td>
                    <td>{{$appointment->concern}}</td>
                    <td>{{$appointment->phone}}</td>
                   
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>