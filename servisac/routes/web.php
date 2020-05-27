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

//Route baru penambahan dari Pak Arip (Senin, 6 Januari 2019)

////======/////UNTUK PEMANGGILAN PADA TAMPILAN/////=====///////

Route::get('/', function () {
    //return view('welcome');
	return view('whisper/index');
});

Route::get('/contact', function () {
    //return view('welcome');
	return view('whisper/contact');
});

Route::get('/daftar', function () {
    //return view('welcome');
	return view('whisper/daftar');
});

Route::get('/tampilan', function () {
    //return view('welcome');
	return view('whisper/index');
});


Route::get('/aboutus', function () {
    //return view('welcome');
	return view('whisper/about');
});

Route::resource('datamodel', 'datacontroller');
Route::resource('pesanmodel', 'pesancontroller');


Route::group(['middleware' => 'auth'], function(){
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

/////////////////////////////////////////////////////////////////

Route::get('/login','authcontroller@login')->name('login');
// Route::get('/register')
Route::post('/postlogin','authcontroller@postlogin');
Route::get('/logout','authcontroller@logout');

Route::get('pegawaimodel/export', 'pegawaicontroller@export');
Route::get('pegawaimodel/exportpdf', 'pegawaicontroller@exportPdf');
Route::get('customermodel/export', 'customercontroller@export');
Route::get('customermodel/exportpdf', 'customercontroller@exportPdf');

////////////////////////////////////////////////////////////////////



////////////////////////////////UNTUK TABEL///////////////////////////////

	Route::resource('customermodel', 'customercontroller');
	
	Route::resource('ordermodel', 'ordercontroller');
	
	Route::resource('pegawaimodel', 'pegawaicontroller');
	
///////////////////////////////////////////////////////////////////////



	Route::get('/home', function () {
    //return view('welcome');
		return view('/layouts.home');
	});

	Route::get('/about', function () {
    //return view('welcome');
		return view('/layouts.about');
	});

	Route::get('/clear-cache', function() {
		Artisan::call('cache:clear');
		return "Cache is cleared";
	});

});

// Route::get('/', function () {
//     // return view('welcome');
//     return view('layouts.home'); 
//     // atau return view('/layouts/index');
// });

// Route::get('/home', function () {
//     return view('layouts.home'); 
// });

// Route::get('/about', function () {
//     return view('layouts.about'); 
// });


/*CARA PERTAMA*/

		// Route::resource('customermodel','customercontroller');
		// // kalau mau namanya gamau sesuai struktur atau maunya bebas pakai route nya yg kaya gini Route::get('customermodel','customercontroller@namafungsinya');

		// Route::resource('pegawaimodel','pegawaicontroller');

		// Route::get('/clear-cache',function(){
		// 	Artisan::call('cache:clear');
		// 	return "cache is cleared";
		// });

	// Route::post('/customermodel/{id}/create','customercontroller@create');
/*CARA KEDUA*/

/*AKTIFIN YANG INI KALAU MAU PAKAI YANG LAMA*/

		// Route::get('/', function () {
		//     return view('welcome');
		// });


		// /* PEGAWAI */

		// 	Route::get('/pegawaimodellama','pegawaicontrollelamar@tampilan');

/* untuk menghubungkan model dan controller */


		// 	Route::post('/pegawaimodellama/create','pegawaicontrollerlama@add');
		// 	Route::get('/pegawaimodellama/{id}/edit','pegawaicontrollerlama@ubah');
		// 	Route::post('/pegawaimodellama/{id}/update','pegawaicontrollerlama@update');
		// 	Route::get('/pegawaimodellama/{id}/delete','pegawaicontrollerlama@hapus');




		// /* CUSTOMER*/


		//BAGIAN YANG @ ADALAH FUNGSI DARI CONTROLLER
		// 	Route::get('/customermodellama','customercontrollerlama@tampilan');


		// 	// ini untuk create
		// 	Route::post('/customermodellama/create','customercontrollerlama@create');
		// 	Route::get('/customermodellama/{id}/edit','customercontrollerlama@edit');
		// 	Route::post('/customermodellama/{id}/update','customercontrollerlama@update');
		// 	Route::get('/customermodellama/{id}/delete','customercontrollerlama@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
