<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodegaController;

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


Route::get('/bodega', [BodegaController::class, 'index']);

Route::get('/bodega/{id}', [BodegaController::class, 'show']);

Route::post('/bodega', [BodegaController::class, 'create']);

Route::delete('/bodega/{id}', [BodegaController::class, 'destroy']);

Route::put('/bodega/{id}', [BodegaController::class, 'edit']);

