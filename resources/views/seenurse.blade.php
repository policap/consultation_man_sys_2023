<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Doctor's observation</title>
            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        </head>    
    <body>
    <div class="container"><br>
        {{-- <img src="{{ asset('assets/img/nurse2.jpg') }}" class="img-fluid" alt="Responsive image"> --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Nurse Observations') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="seenurse">
                            @csrf
                            <div class="row mb-3">
                                <label for="bp" class="col-md-4 col-form-label text-md-end">Blood pressure/mmHg</label>
    
                                <div class="col-md-6">
                                    <input id="bp" type="number" class="form-control @error('bp') is-invalid @enderror" name="bp" value="{{ old('bp') }}" required autocomplete="bp" autofocus>
    
                                    @error('bp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="wt" class="col-md-4 col-form-label text-md-end">Weight/kg</label>
    
                                <div class="col-md-6">
                                    <input id="wt" type="number" class="form-control @error('wt') is-invalid @enderror" name="wt" value="{{ old('wt') }}" required autocomplete="wt" autofocus>
    
                                    @error('wt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="temp" class="col-md-4 col-form-label text-md-end">Temperature/0C</label>
    
                                <div class="col-md-6">
                                    <input id="temp" type="number" class="form-control @error('temp') is-invalid @enderror" name="temp" value="{{ old('temp') }}" required autocomplete="temp" autofocus>
    
                                    @error('temp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="patientreport" class="form-label">Patient's report</label>
                                <textarea rows="3" id="patientreport" class="form-control @error('patientreport') is-invalid @enderror" name="patientreport" value="{{ old('patientreport') }}" required autocomplete="patientreport" autofocus  ></textarea>
                                @error('patientreport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="nurseobservation" class="form-label">Nurse Observations</label>
                                <textarea rows="3" id="nurseobservation" class="form-control @error('nurseobservation') is-invalid @enderror" name="nurseobservation" value="{{ old('nurseobservation') }}" required autocomplete="nurseobservation" autofocus  ></textarea>
                                @error('nurseobservation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-0">
                                <div class=" d-flex justify-content-center mx-auto ">
                                    <button type="submit" class="btn btn-success mx-1">
                                        {{ __('Consulted') }}
                                    </button>
                                    {{-- <button type="submit" class="btn btn-success mx-1">
                                        <a href="{{ route('patientresult') }}" class="text-white">Patient Result</a>
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
     
</body>
</html>