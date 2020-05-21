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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'], function () {
    Route::get('/','DashboardController@index');
    Route::resource('user', 'UserController');
    Route::resource('siswa', 'StudentController');
    Route::resource('kesehatan', 'HealthController');
    Route::get('health/student/{id}', 'HealthController@StudentFindHealth')->name('student.find.health');
    Route::get('health/create/{id}', 'HealthController@create')->name('kesehatan2.create');
    Route::post('health/student', 'HealthController@Search')->name('student.search');
    Route::post('users/update', 'HomeController@tested');
});
