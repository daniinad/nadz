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

Route::get('/keren', function () {
    return view('coba');
});

Route::get('/testmodel', function () {
    $query = App\Siswa::all();
    return $query;
});

Route::get('/testmodel2', function () {
    $query = App\Siswa::find(4);
    return $query;
});

Route::get('/testmodel3', function () {
    $query = App\Siswa::where('title','like','%cepat nikah%')->get();
    return $query;
});

Route::get('/model', function () {
    $query = App\Siswas::all();
    return $query;
});

Route::get('/about', function() {
	return view('about');
});

Route::get('/coba', function() {
	return view('layouts.mastah');
});

Route::get('/latihan1', function() {
	return view('latihann');
});

Route::get('/latihan2', function() {
	return view('latihannn');
});

Route::get('/latihan3', function() {
	return view('latihannnn');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
