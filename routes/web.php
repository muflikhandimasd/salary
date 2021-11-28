<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// get harus dispesifikkan ke methodnya
Route::get('/home', 'HomeController@index')->name('home');
// Route::view('/tampilan', 'layouts.template');
Route::match(['get', 'post'], '/register', function () {
    return redirect('login');
});


Route::resource('karyawan', 'KaryawanController');
Route::resource('konten', 'KontenController');
Route::resource('berita', 'BeritaController');
Route::resource('jabatan', 'JabatanController');
Route::resource('tunjangan', 'TunjanganController');
// 'test' -> ini adalah uri:user resource identifier(kalo di api ini endpoint), 'TunjanganController@test' ->@test adalah method yang ada dalam Tunjangan Controller

Route::get('list-karyawan', 'PenggajianController@index');
// nama routenya udah dialiasin
// Route::get('create-gaji/{id}', 'PenggajianController@create_penggajian')->name('createGaji');
// manggilnya di view : <a href="{{ route('createGaji', $row->id) }}" class="btn btn-primary"><i
// class="fa fa-exchange-alt"></i>
// Penggajian</a>

Route::get('create-gaji/{id}', 'PenggajianController@create_penggajian');
Route::post('post-gaji', 'PenggajianController@store');

Route::get('riwayat-gaji/{id}', 'PenggajianController@detail');
