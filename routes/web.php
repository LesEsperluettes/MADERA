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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\AccueilController::class, 'index'])->name('home');
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts');
Route::get('/devis1', [App\Http\Controllers\DevisController::class, 'index_etape1'])->name('devis_etape_1');
