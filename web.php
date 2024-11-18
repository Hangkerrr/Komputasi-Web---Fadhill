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
    return view('welcome');
});


Route::get('/halo-apa-kabar', function () {
    return 'Halo apa kabar dunia';
});

Route::get('/halo-apa-kabar/{name}', function ($name) {
    return "Halo apa kabar dunia $name";
});

Route::get('/nama/{frontname}/{backname}', function ($frontname, $backname) {
    return "Halo apa kabar $frontname $backname";
});

Route::get('/home', [BiodataController::class, 'home']);
Route::get('/about', [BiodataController::class, 'about']);

// Tanpa Controller
Route::get('/web', function () {
    return view('home'); // Lokasi: resources/view
})->name('home');
Route::get('/web/about', function () {
    return view('about'); // Lokasi: resources/view
})->name('about');
Route::get('/web/contact', function () {
    return view('contact'); // Lokasi: resources/view
})->name('contact');

Route::get('/new', [PageController::class, 'home'])->name('home');
Route::get('/new', [PageController::class, 'about'])->name('about');
Route::get('/new', [PageController::class, 'contact'])->name('contact');