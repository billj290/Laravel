<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CarController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BikeController;

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

Route::get('/cars', function () {
    return view('car');
});

 
// Route::get('/sayHello', [CarController::class, 'sayHello']);
// Route::get('/index', [CarController::class, 'index']);

 //resource的路徑就有了 綁CarController
Route::resource('cars', CarController::class);
Route::resource('bikes', BikeController::class);

