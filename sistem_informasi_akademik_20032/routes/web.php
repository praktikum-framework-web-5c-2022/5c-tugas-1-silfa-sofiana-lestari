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
    $mahasiswa = [
        "Atep",
        "Adhi",
        "Adlam",
        "Bimo",
        "Bembi",
        "Hanna",
        "Caca",
        "Riska",
        "Wahyu",
        "Alda"
    ];
    return view('mahasiswa')->with('mahasiswa',$mahasiswa);
});

Route::get('/dosen', function () {
    $dosen = [
        "Joko Kendil",
        "Soekarno",
        "Budi",
        "Ujang",
        "Asep",
        "Suyanto",
        "Jaka",
        "Harto",
        "Gus Mitah",
        "Jajang"
    ];
    return view('dosen')->with('dosen',$dosen);
});
Route::get('/matakuliah', function () {
    $matakuliah = [
        "PBM",
        "PBW",
        "FPW",
        "Datmin",
        "Statprob",
        "Aljabar",
        "Basis data",
        "Blockchain",
        "Kalkulus",
        "Technopreuneur"
    ];
    return view('matakuliah')->with('matakuliah',$matakuliah);
});


