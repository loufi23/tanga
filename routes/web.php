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
    return view('tanga');
});
Route::get('/tanga', function () {
    return view('tanga');
});
Route::get('/formations', function () {
    return view('formations');
});
Route::get('/pourquoi', function () {
    return view('pourquoi');
});
Route::get('/projet', function () {
    return view('projet');
});
Route::get('/submit', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('admin');

Route::get('/maintenance', function () {
    return view('error');
});
Route::get('/send', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('admin');
//Route::get('/inscription','InscriptionController@inscription');
Route::post('/inscription','InscriptionController@inscriptionsubmit')->name('submit'); 