@extends('consultation')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view Patient Result</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>bp</th>
            <th>temp</th>
            <th>wt</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->age }}</td>
                    <td>{{ $patient->bp }}</td>
                    <td>{{ $patient->temp }}</td>
                    <td>{{ $patient->wt }}</td>
                    <td><a href="{{ route('download', $patient->id) }}">download</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div><button type="submit" class="btn btn-primary mx-auto d-block"><a href="{{ route('seedoctor') }}" class="text-white">BACK</a></button></div>

</body>
</html>
    
@endsection