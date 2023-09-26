<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Patient Consultation Details from Nurse') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="seenurse">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="age" class="col-md-4 col-form-label text-md-end">Age/years</label>
    
                                <div class="col-md-6">
                                    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
    
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
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
                                <label for="temp" class="col-md-4 col-form-label text-md-end">Temperature/0Celsius</label>
    
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
                                <label for="wt" class="col-md-4 col-form-label text-md-end">Weight/kg</label>
    
                                <div class="col-md-6">
                                    <input id="wt" type="text" class="form-control @error('wt') is-invalid @enderror" name="wt" value="{{ old('wt') }}" required autocomplete="wt" autofocus>
    
                                    @error('wt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="patientreport" class="form-label">Patient's reported problem</label>
                                <textarea rows="3" id="patientreport" class="form-control @error('patientreport') is-invalid @enderror" name="patientreport" value="{{ old('patientreport') }}" required autocomplete="patientreport" autofocus  ></textarea>
                                @error('patientreport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4 d-flex">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Consulted') }}
                                    </button>
                                    
                                    {{-- <button type="submit" class="btn btn-success mx-2">
                                        <a href="{{ route('patientresult') }}" class="text-white">See Patient Result</a>
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
