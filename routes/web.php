<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;


Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});


Route::get('/profile', function () {
    return view('profile', [
        "title" => "Home",
        "name" => "Andhikka Bagus Setiawan",
        "nim" => "13242520023",
        "prodi" => "Teknologi Informasi",
        "gambar" => "Messi.jpg"
    ]);
});


Route::get('/berita',[BeritaController::class, 'tampilberita']);
Route::get('berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);
    

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});