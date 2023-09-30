<?php

use App\Http\Controllers\VehicleController;
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

Route::prefix('veiculos')->group(function () {
    Route::get('/', [VehicleController::class, 'index']); 
    Route::post('/', 'VeiculoController@store'); 
    Route::get('/{id}', 'VeiculoController@show'); 
});

Route::get('/', function () {
    return response()->json(['message' => 'OK']);
});