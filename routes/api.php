<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ReservationController;
use App\Http\Controllers\API\OrderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/reservation_dine', [ReservationController::class, 'storedine']);
Route::post('/reservation_delivery', [ReservationController::class, 'storedelivery']);
Route::get('/delete_data', [ReservationController::class, 'delete_data']);
// Route::post('/cancelorder')