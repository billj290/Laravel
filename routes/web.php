<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HotelController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('student', function () {
//     return view('student.index');
// });

//自定義的放上面    
Route::get('child', [StudentController::class, 'childPage'])->name('student.child');
Route::get('first_floor', [StudentController::class, 'first_floor'])->name('student.first');
Route::get('second_floor', [StudentController::class, 'second_floor'])->name('student.second');
Route::get('third_floor', [StudentController::class, 'third_floor'])->name('student.third');
Route::get('top_floor', [StudentController::class, 'pent_house'])->name('student.penthouse');

Route::get('students_excel', [StudentController::class, 'excel']);
Route::resource('students', StudentController::class);


Route::get('f1', [HotelController::class, 'f1'])->name('hotel.f1');
Route::get('f2', [HotelController::class, 'f2'])->name('hotel.f2');
Route::get('f3', [HotelController::class, 'f3'])->name('hotel.f3');
Route::resource('hotel', HotelController::class);