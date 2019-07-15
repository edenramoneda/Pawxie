<?php

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

Route::get('/', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::post('AuthLogin','LoginController@loginAuth');
//Homepage
Route::get('home', 'HomepageController@index');
//Patient
Route::prefix('patient')->group(function () {
    Route::get('owners', 'patientOwnersController@index');
    Route::get('getOwners', 'patientOwnersController@getOwners');
    Route::get('pets', 'patientPetsController@index');
    //pet report
    Route::get('report/{pet_id}','patientPetsController@printReport');
    Route::get('getPets', 'patientPetsController@getPets');
    Route::prefix('petVaccination')->group(function(){
        Route::get('/', 'petVaccinationsController@index');
        Route::get('getPetVac', 'petVaccinationsController@petVaccinations');
        Route::get('vaccinationReportModal/{pet_id}', 'petVaccinationsController@vaccinationReportModal');
    });
    Route::prefix('/petLabTests')->group(function(){
        Route::get('/', 'petLabTestsController@index');
        Route::get('getpetLabTests', 'petLabTestsController@getpetLabTests');
        Route::get('petLabTestModal/{pet_id}', 'petLabTestsController@petLabTestModal');
    });
});
Route::prefix('vaccination')->group(function () {
    Route::get('/', 'vaccinationController@index');
    Route::get('getVaccinations', 'vaccinationController@getVaccinations');
});
Route::prefix('labtest')->group(function () {
    Route::get('/', 'labTestController@index');
    Route::get('getLabTest', 'labTestController@getLabTest');
});
Route::prefix('veterinarians')->group(function () {
    Route::get('/', 'veterinaryController@index');
    Route::get('getVeterinaries', 'veterinaryController@getVeterinaries');
});

