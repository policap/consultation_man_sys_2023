<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor's observation</title>
    <link  href="{{ asset('assets/css/bootstrap.min.css') }}"          rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Doctor observation or prescriptions') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="seedoctor">
                            @csrf
                            <div class="row mb-3">
                                <label for="doctorobservation" class="form-label">Doctor observation and prescription</label>
                                <textarea rows="3" id="doctorobservation" class="form-control @error('doctorobservation') is-invalid @enderror" name="doctorobservation" value="{{ old('doctorobservation') }}" required autocomplete="doctorobservation" autofocus  ></textarea>
                                @error('doctorobservation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-0">
                                <div class=" d-flex justify-content-center mx-auto ">
                                    <button type="submit" class="btn btn-success mx-1">
                                        <a href="{{ route('patientresult') }}" class="text-white">Patient Result</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary mx-1">
                                        {{ __('Attended to, See Pharmacist') }}
                                    </button>
                                    <button type="submit" class="btn btn-danger mx-1">
                                        <a href="{{ route('admitpatient') }}" class="text-white">Admit Patient</a>
                                    </button>
                                    {{-- <button type="submit" class="btn btn-primary">
                                        <a href="{{ route('performlogout') }}"class="text-white">Logout</a>
                                    </button> --}}
    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>
