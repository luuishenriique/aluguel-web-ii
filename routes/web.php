<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentController;

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

Route::post('/instruments',[InstrumentController::class, 'store'])->name('add-instrument');

require __DIR__.'/auth.php';
