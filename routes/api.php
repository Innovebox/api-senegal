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


Route::resource('regions', App\Http\Controllers\RegionController::class)->only(['index','show']);

Route::resource('departements', App\Http\Controllers\DepartementController::class)->only(['index','show']);

Route::resource('communes', App\Http\Controllers\CommuneController::class)->only(['index','show']);


Route::get('arrondissements', 'ArrondissementController@index');
