@extends('consultation')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor's Report</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>{!! $doctorreps !!}</th>
            <th>Action</th>
            {{-- <th>bp</th>
            <th>temp</th>
            <th>wt</th> --}}
            {{-- <th></th> --}}
        </thead>
        <tbody>
            @foreach ($doctorreps as $doctorrep)
                <tr>
                    <td>{{ $doctorrep->id }}</td>
                    <td>{{ $doctorrep->doctorreport }} </td>
                    {{-- <td>$patient->bp </td>
                    <td>{{ $patient->temp }}</td>
                    <td>{{ $patient->wt }}</td> --}}
                    <td><a href="{{ route('docdownload', $doctorrep->id) }}">download</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div><button type="submit" class="btn btn-primary mx-auto d-block"><a href="{{ route('seepharmacist') }}" class="text-white">BACK</a></button></div>

</body>
</html>
    
@endsection