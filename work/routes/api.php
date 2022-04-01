<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("poi/random",[\App\Http\Controllers\PoiController::class, "random"]);
Route::post("rating",[\App\Http\Controllers\RatingController::class, "store"]);
Route::post("booking",[\App\Http\Controllers\BookingController::class, "store"]);