<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\RentController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/employee', function () {
    return view('employee');
})->middleware(['auth'])->name('employee');

Route::get('/instruments', function () {
    return view('instruments');
})->middleware(['auth'])->name('instruments');

Route::model('Instrument', Instrument::class);
Route::get('/dashboard/delete/{instrument}',[InstrumentController::class, 'destroy'])->name('rm-instrument');

Route::get('/delete/{rent}',[RentController::class, 'destroy'])->name('rm-rent');

Route::post('/instruments',[InstrumentController::class, 'store'])->name('add-instrument');

require __DIR__.'/auth.php';
