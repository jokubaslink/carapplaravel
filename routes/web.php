<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\RentController;
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

Route::get('/about', function() {
    return view('about');
});

Route::get('/cars', [CarsController::class, 'getCars']);
Route::get('/cars/{id}', [CarsController::class, 'getCar']);
Route::get('/cars/{id}/rent', [RentController::class, 'createModal'])->name('rent.show');
Route::post('/cars/{id}/rented', [RentController::class, 'carRented'])->name('rent.rented');