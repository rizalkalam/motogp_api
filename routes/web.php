<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\RiderController;
use App\Http\Controllers\admin\AssetsController;
use App\Http\Controllers\admin\CircuitController;
use App\Http\Controllers\admin\RegisterController;

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
    return view('home');
});

Route::get('/dashboard', function(){
    return view('index');
})->middleware('auth');


// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// rider page
Route::resource('/dashboard/riders', RiderController::class)->middleware('auth');
Route::post('/rider/add', [RiderController::class,'store']);
Route::get('/detail/rider/{rider}', [RiderController::class, 'show']);
Route::post('/update/rider/{rider}', [RiderController::class, 'update']);
Route::delete('/delete/rider/{rider}', [RiderController::class, 'destroy']);

// team page
Route::resource('/dashboard/teams', TeamController::class)->middleware('auth');
Route::post('/team/add', [TeamController::class,'store']);
Route::get('/detail/team/{team}', [TeamController::class, 'show']);
Route::post('/update/team/{team}', [TeamController::class, 'update']);
Route::delete('/delete/team/{team}', [TeamController::class, 'destroy']);

// circuit page
Route::resource('/dashboard/circuits', CircuitController::class)->middleware('auth');

// assets page
Route::resource('/dashboard/assets', AssetsController::class)->middleware('auth');
Route::post('/asset/add', [AssetsController::class,'create']);
Route::delete('/delete/asset/{asset}', [AssetsController::class, 'destroy']);