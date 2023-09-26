<?php

namespace App\Http\Controllers;

use App\Models\DoctorObservation;
use App\Models\NurseConsult;
use App\Models\Patient;
use App\Models\PatientAdmission;
use App\Models\PharmacistSale;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CustomLoginController extends Controller
{
    public function login(Request $request){
        //return $request->all();
        if(Auth('doctors')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            echo 'Doctor logged in successful';
            return redirect()->route('docdashboard');

        }elseif(Auth('nurses')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            echo 'Nurse logged in successful';
            return redirect()->route('nurdashboard');

        }
        elseif(Auth('patients')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            echo 'Patient logged in successful';
            return redirect()->route('patient');

        }
        elseif(Auth('pharmacists')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            echo 'pharmacist logged in successful';
            return redirect()->route('phardashboard');

        }
        else{
            return 'Wrong email and password';

        }

    }
    public function show(){
        return view('auth.login');
    }
    public function registerview(){
        return view('auth.register');
    }
    public function registerstore(Request $request){
        $request->validate(['fname'=>'required', 'lname'=>'required', 'contact'=>'required', 'dob'=>'required','email'=>'required|email', 'password_confirmation'=>'required|min:8', 'password'=>'required|same:password_confirmation']);
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $instance= new Register($data);
        $instance->save();
        echo 'Patient Registered successfully';
        return redirect()->route('login');
    }
    public function consultnurse(){
        return view('seenurse');
    }
    public function storeconsultnurse(Request $request){
        $request->validate(['bp'=>'required', 'wt'=>'required', 'temp'=>'required', 'patientreport'=>'required', 'nurseobservation'=>'required']);
        $data=$request->all();
        $instance= new NurseConsult($data);
        $instance->save();
        echo 'Patient Consulted Successfully';
        return redirect()->route('seedoctor');
    }
    public function doctorreport(){
        return view('seedoctor');
    }
    public function doctorreportstore(Request $request){
        $request->validate([
            'doctorobservation'=>'required'
        ]);
        $data=$request->all();
        $instance= new DoctorObservation($data);
        $instance->save();
        echo 'Patient attended to successfully by the doctor';
        return redirect()->route('seepharmacist');

    }
    public function pharmacistdrug(){
        return view('seepharmacist');
    }
    public function pharmacistdrugstore(Request $request){
        $request->validate([
            'pharmacistapproved'=>'required'
        ]);
        $data=$request->all();
        $instance= new PharmacistSale($data);
        $instance->save();
        echo 'Patient drug purchase successful';
        return redirect()->route('performlogout');
    }
    public function create(){
        return view('seenurse');

    }
    public function viewresult(Request $request){
        $patients=NurseConsult::all();
        return view('patientresult', ['patients'=>$patients]);

    }
    public function downloadresult($id){
        $path = NurseConsult::where("id", $id)->value("file_path");
        return Storage::download($path);

    }
    public function doctorreportpatient(Request $request){
        $doctorreps=DoctorObservation::all();
        return view('doctorreport', ['doctorreps'=>$doctorreps]);

    }
    public function docresult($id){
        $path = DoctorObservation::where("id", $id)->value("file_path");
        return Storage::download($path);

    }
    public function admit(){
        return view('admitpatient');
    }
    public function admitstore(Request $request){
        $request->validate(['patientadmission'=>'required']);
        $data=$request->all();
        $instance= new PatientAdmission($data);
        $instance->save();
        echo 'Patient Admitted Successfully';
        return redirect()->route('seedoctor');
        
    }
    public function ward(){
        return view('wardfee');
        
    }
    public function patientdata(){
        return view('patient');
        
    }
    public function patientdatastore(Request $request){
        $request->validate([
            'fname'=>'required', 'lname'=>'required', 'gender'=>'required', 'age'=>'required', 'contact'=>'required', 'email'=>'required', 'password'=>'required', 'medicalhistory'=>'required'
        ]);
        $data=$request->all();
        $data['password']=Hash::make('12345678');
        $instance= new Patient($data);
        $instance->save();
        echo 'Patient Biodata and Medical History Submitted Successfully';
        return redirect()->route('patient');
    }
    //method for log out
    public function perform(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
