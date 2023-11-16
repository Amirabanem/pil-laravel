<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $npm = [123, 124, 125, 126];
    $nama = ['amira', 'namira', 'samira', 'nira'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'jumlah', 'nama'));
});

Route::get('profile', function () {
    $nama = 'Amira';
    //return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});

//Route::get('array', function () {
//Infinite loop
// $nilai_awal = 1;
//while ($nilai_awal <= 100) {
// echo 'hallo laravel ' . $nilai_awal . 'x<br>';
// $nilai_awal++;
//}
//});

//Route::get('array', function () {
   // for ($i = 1; $i <= 5; $i++) {
      //  echo  'Hallo World' . $i . 'x<br>';
  //  }
//});
