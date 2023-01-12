<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ReservationController;

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/transaction', function (){
    return view('transaction');
});

Route::resource('/transactions', ReservationController::class);

Route::get('/test', [ReservationController::class, 'test']);

// Route::get('/test', function (){
//     return view('print_receipt');
// });

Route::get('/print_receipt/{id}', [ReservationController::class, 'print_receipt']);
