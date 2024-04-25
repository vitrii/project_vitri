<?php

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

//variabel
Route::get('/about',function () {
      $nama = "Rafli";
      $jenis_kelamin = "Laki-laki";
      $alamat = "kopo";
      $pendidikan = "S1";
      $pekerjaan = "Manager";
return view('biodata',compact('nama','jenis_kelamin,alamat,pendidikan,pekerjaan'));
});
Route::get('/home', function () {
    return view('biodata1');
});

Route::get('/contact', function () {
 return view('biodata2');
});

//parameter
Route::get('/about2{nama}/{jenis_kelamin}/{alamat}/{pendidikan}/{pekerjaan}',function (Request $request,$nama) {
    
    $nama2 = $nama;
    $jenis_kelamin2 = $jenis_kelamin;
    $alamat        = $alamat;
    $pendidikan    = $pendidikan;
    $pekerjaan     = $pekerjaan;


    return view('param',compact('nama2','jenis_kelamin2','alamat2,pendidikan2,pekerjaan2'));
});

