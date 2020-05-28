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

// Route::get('/', function () {
//     return view('admin.health.tau');
// });
Route::get('/tes','DashboardController@quick_access');

Route::get('/tes2', function () {
    return view('admin.medical_record.form');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'], function () {
    Route::get('/','DashboardController@index');
    Route::resource('user', 'UserController');
    Route::resource('siswa', 'StudentController');
    Route::resource('kesehatan', 'HealthController');
    Route::resource('imunisasi', 'ImmunizationHistoryController');
    Route::resource('status-gizi', 'MeasurementController');
    Route::resource('rekam-medik', 'MedicalRecordController');

    Route::get('kesehatan/student/{id}', 'HealthController@StudentFindHealth')->name('student.find.health');
    Route::get('kesehatan/create/{id}', 'HealthController@create')->name('kesehatan2.create');

    Route::get('imunisasi/student/{id}', 'ImmunizationHistoryController@StudentFindImmune')->name('student.find.immune');
    Route::get('imunisasi/create/{id}', 'ImmunizationHistoryController@create')->name('imunisasi2.create');

    Route::get('rekam-medik/student/{id}', 'MedicalRecordController@StudentFindRecord')->name('student.find.record');
    Route::get('rekam-medik/create/{id}', 'MedicalRecordController@create')->name('rekam-medik2.create');

    Route::post('kesehatan/cari_siswa', 'HealthController@SearchStudent')->name('student.search.health');
    Route::post('imunisasi/cari_siswa', 'ImmunizationHistoryController@SearchStudent')->name('student.search.immune');
    Route::post('rekam-medik/cari_siswa', 'MedicalRecordController@SearchStudent')->name('student.search.record');

    Route::post('users/update', 'HomeController@tested');
});
