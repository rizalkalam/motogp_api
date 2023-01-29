<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\TeamController;
use App\Http\Controllers\api\AssetController;
use App\Http\Controllers\api\RiderController;
use App\Http\Controllers\api\CircuitController;

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

// reider
Route::get('/rider',[RiderController::class,'index']);
Route::get('/rider/{id?}', [RiderController::class, 'details']);

// team
Route::get('/team', [TeamController::class, 'index']);
Route::get('/team/{id?}', [TeamController::class, 'details']);

// circuit
Route::get('/circuit', [CircuitController::class, 'index']);

// asset
Route::get('/asset', [AssetController::class, 'index']);