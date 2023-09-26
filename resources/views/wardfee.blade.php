@extends('consultation')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">S/N</th>
        <th scope="col">Rooms</th>
        <th scope="col">Characteristics</th>
        <th scope="col">Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>VIP ward 1</td>
        <td>A.C</td>
        <td>30,000 FRS</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>VIP ward 2</td>
        <td>A.C, T.V, Warm water</td>
        <td>40,000 FRS</td>
        
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>VIP ward 3</td>
        <td>A.C, T.V, Warm water, free meal, wifi</td>
        <td>50,000 FRS</td>
    
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Normal ward 1</td>
        <td>/</td>
        <td>10,000 FRS</td>
        
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Normal ward 2</td>
        <td>/</td>
        <td>5,000 FRS</td>
        
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Normal ward 3</td>
        <td>/</td>
        <td>2500 FRS</td>
    
      </tr>
    </tbody>
  </table>
  
  <div><button type="submit" class="btn btn-primary mx-auto d-block"><a href="{{ route('admitpatient') }}" class="text-white">BACK</a></button></div>
    
@endsection