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

Route::get('/home', [App\Http\Controllers\AccueilCommercialController::class, 'index'])->name('home');
/* TODO: If user=BE; then route::get->name('home-be');
else if user=CO; then ('home-co')
*/
Route::get('/home-be', [App\Http\Controllers\AccueilController::class, 'indexBE'])->name('home-be');
Route::get('/home', [App\Http\Controllers\AccueilController::class, 'index'])->name('home');

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts');

Route::get('/devis1', [App\Http\Controllers\DevisController::class, 'index_etape1'])->name('devis_etape_1');
Route::get('/devis2', [App\Http\Controllers\DevisController::class, 'index_etape2'])->name('devis_etape_2');
Route::get('/devis3', [App\Http\Controllers\DevisController::class, 'index_etape3'])->name('devis_etape_3');
Route::get('/devis4', [App\Http\Controllers\DevisController::class, 'index_etape4'])->name('devis_etape_4');
Route::get('/devis_success', [App\Http\Controllers\DevisController::class, 'index_etape_finale'])->name('devis_etape_finale');

Route::get('/creationModule', [App\Http\Controllers\ModuleController::class, 'module_etape1'])->name('module_etape_1');
Route::get('/coupePrincipe', [App\Http\Controllers\ModuleController::class, 'module_etape2'])->name('module_etape_2');
Route::get('/composants', [App\Http\Controllers\ModuleController::class, 'module_etape3'])->name('module_etape_3');
Route::get('/parametres', [App\Http\Controllers\ModuleController::class, 'module_etape4'])->name('module_etape_4');
Route::get('/resume', [App\Http\Controllers\ModuleController::class, 'module_etape5'])->name('module_etape_5');
