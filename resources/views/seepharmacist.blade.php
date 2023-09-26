<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacist Approval</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container"><br>
    <div class="row justify-content-center pt-5 my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fw-bold">{{ __('Pharmacist approval form') }}</div>

                <div class="card-body">
                    <form method="POST" action="seepharmacist">
                        @csrf
                        <div class="row mb-3">
                            <label for="pharmacistapproved" class="form-label">Pharmacist approval</label>
                            <textarea rows="3" id="pharmacistapproved" class="form-control @error('pharmacistapproved') is-invalid @enderror" name="pharmacistapproved" value="{{ old('pharmacistapproved') }}" required autocomplete="pharmacistapproved" autofocus  ></textarea>
                            @error('pharmacistapproved')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger mx-2">
                                    <a href="{{ route('doctorreport') }}" class="text-white">Doctor's Report</a>
                                </button>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Pharmacist Approved') }}
                                </button>
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
