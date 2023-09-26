<?php

use App\Http\Controllers\CustomLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::view('consultation', 'consultation')->name('consultaion');
Route::get('login',[CustomLoginController::class, 'show'])->name('login');
Route::post('login',[CustomLoginController::class, 'login']);
Route::get('register',[CustomLoginController::class, 'registerview'])->name('register');
Route::post('register',[CustomLoginController::class, 'registerstore']);
Route::get('seenurse', [CustomLoginController::class, 'consultnurse'])->name('seenurse');
Route::post('seenurse', [CustomLoginController::class, 'storeconsultnurse']);
Route::get('patient', [CustomLoginController::class, 'patientdata'])->name('patient');
Route::post('patient', [CustomLoginController::class, 'patientdatastore']);
Route::get('seedoctor', [CustomLoginController::class, 'doctorreport'])->name('seedoctor');
Route::post('seedoctor', [CustomLoginController::class, 'doctorreportstore']);
Route::get('seepharmacist', [CustomLoginController::class, 'pharmacistdrug'])->name('seepharmacist');
Route::post('seepharmacist', [CustomLoginController::class, 'pharmacistdrugstore']);
Route::get('patientresult', [CustomLoginController::class, 'viewresult'])->name('patientresult');
Route::get('download/{id}', [CustomLoginController::class, 'downloadresult'])->name('download');
Route::get('admitpatient', [CustomLoginController::class, 'admit'])->name('admitpatient');
Route::post('admitpatient', [CustomLoginController::class, 'admitstore']);
Route::get('wardfee', [CustomLoginController::class, 'ward'])->name('wardfee');
Route::get('doctorreport', [CustomLoginController::class, 'doctorreportpatient'])->name('doctorreport');
Route::get('docdownload/{id}', [CustomLoginController::class, 'docresult'])->name('docdownload');
//Route::get('doctorreport', [CustomLoginController::class, 'admitstore']);
Route::view('docdashboard', 'docdashboard')->name('docdashboard');
Route::view('nurdashboard', 'nurdashboard')->name('nurdashboard');
Route::view('phardashboard', 'phardashboard')->name('phadashboard');

//logout route starts here
Route::group(['middleware'=>['auth']], function(){
    /**
     * Logout route
     */
    //Route::get('/logout', 'CustomLoginController::@perform')->name('logout.perform'); OR
    Route::get('performlogout', [CustomLoginController::class, 'perform'])->name('performlogout');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
