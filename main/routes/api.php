<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http \Controllers\ApiController;

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

Route::post("/sort_string",[ApiController::class, 'sortString']);

Route::post("/place_value",[ApiController::class, 'placeValue']);

Route::post("/binary_transale",[ApiController::class, 'binaryTranslate']);

Route::post("/prefix_calculate",[ApiController::class, 'prefixCalculate']);
//just for test on first place
Route::get("/users",[ApiController::class,'getUsers']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

