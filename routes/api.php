<?php

use App\Http\Controllers\ClientController;
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

Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index']); 
    Route::post('/client-create', [ClientController::class, 'store']);
    Route::get('/client-consultation', [ClientController::class, 'consult']);
    Route::delete('/client-delete', [ClientController::class, 'delete']);
    Route::put('/client-update', [ClientController::class, 'update']);
});

Route::get('/', function () {
    return response()->json(['message' => 'ok']);
});