@extends('consultation')
@section('content')
<div class="container"><br>
    <div class=" justify-content-center d-flex mx-auto">
        <div class="  border mx-2 border-warning border-3 rounded-3 text-warning"><a href="{{ route('wardfee') }}">VIP ward 1</a></div>
        <div class="  border mx-2 border-info border-3 rounded-3 text-info"><a href="{{ route('wardfee') }}">VIP ward 2</a></div>
        <div class="  border mx-2 border-success border-3 rounded-3 text-success"><a href="{{ route('wardfee') }}">VIP ward 3</a></div>
        <div class="  border mx-2 border-primary border-3 rounded-3 text-primary"><a href="{{ route('wardfee') }}">Normal ward 1</a></div>
        <div class="  border mx-2 border-danger border-3 rounded-3 text-danger"><a href="{{ route('wardfee') }}">Normal ward 2</a></div>
        <div class="  border mx-2 border-dark border-3 rounded-3 text-dark"><a href="{{ route('wardfee') }}">Normal ward 3</a></div>
     
    </div><br><br>
    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Patient Admission') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="admitpatient">
                            @csrf
                            <div class="row mb-3">
                                <label for="patientadmission" class="form-label">Patient Admission Findings</label>
                                <textarea rows="3" id="patientadmission" class="form-control @error('patientadmission') is-invalid @enderror" name="patientadmission" value="{{ old('patientadmission') }}" required autocomplete="patientadmission" autofocus  ></textarea>
                                @error('patientadmission')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-0">
                                   <div class="col-md-8 offset-md-4 justify-content-center d-block">
                                        <button type="submit" class="btn btn-primary">
                                           {{ __('Patient Admitted') }}
                                       </button>
                        
                                   </div>
                        
                           </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>                                                          
</div>
@endsection