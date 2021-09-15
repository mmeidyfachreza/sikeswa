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
Route::get('/tes','DashboardController@tes');
Route::get('/python','DashboardController@tes3');

Route::get('/', function () {
    return view('guest.new');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['admin'], 'prefix' => 'admin/surat'], function () {
    Route::get('surat-rujukan-kesehatan-anak-sekolah', 'letterController@indexSRKAS')->name('letter.index.srkas');
    Route::post('surat-rujukan-kesehatan-anak-sekolah', 'letterController@printSRKAS')->name('letter.print.srkas');
    Route::get('surat-rujukan-balik', 'letterController@indexRujukBlk')->name('letter.index.rujukblk');
    Route::post('surat-rujukan-balik', 'letterController@printRujukBlk')->name('letter.print.rujukblk');
    Route::get('surat-rujukan-UKS', 'letterController@indexRujukUKS')->name('letter.index.rujukuks');
    Route::post('surat-rujukan-UKS', 'letterController@printRujukUKS')->name('letter.print.rujukuks');
    Route::get('kartu-kontrol','DashboardController@indexkk')->name('karkon.index');
    Route::post('kartu-kontrol','DashboardController@cetak')->name('karkon.cetak');
});

Route::group(['middleware'=>'admin', 'prefix' => 'admin'], function () {
    Route::get('/','DashboardController@index');
    Route::resource('user', 'UserController');
    Route::resource('siswa', 'StudentController');
    Route::resource('kesehatan', 'HealthController');
    Route::resource('imunisasi', 'ImmunizationHistoryController');
    Route::resource('status-gizi', 'MeasurementController');
    Route::resource('rekam-medik', 'MedicalRecordController');
    Route::resource('kelas', 'ClassroomController');

    Route::get('siswa-export','StudentController@export')->name('siswa.export');
    Route::post('siswa-import','StudentController@import')->name('siswa.import');

    Route::get('kesehatan/student/{id}', 'HealthController@indexHealth')->name('student.find.health');
    Route::get('kesehatan/create/{id}', 'HealthController@create')->name('kesehatan2.create');

    Route::get('imunisasi/student/{id}', 'ImmunizationHistoryController@indexImmune')->name('student.find.immune');
    Route::get('imunisasi/create/{id}', 'ImmunizationHistoryController@create')->name('imunisasi2.create');

    Route::get('rekam-medik/student/{id}', 'MedicalRecordController@indexMedRec')->name('student.find.record');
    Route::get('rekam-medik/create/{id}', 'MedicalRecordController@create')->name('rekam-medik2.create');

    Route::post('users/update', 'HomeController@tested');
});
