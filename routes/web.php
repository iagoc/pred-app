<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\ResidentsController;

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

// Route::get('/', function () {
//     return view('template.layout');
// });

// Route::get('/building', function(){
//     return view('building.index');
// });

Route::get('/resident', function(){
    return view('resident.index');
});

Route::get('/resident/create', 'App\Http\Controllers\ResidentsController@create');

Route::get('/resident', [ResidentsController::class, 'index'])->name('resident-list');
Route::get('/resident/create', [ResidentsController::class, 'create']);
Route::post('/resident/create', [ResidentsController::class, 'store']);

Route::post('/resident/dados', [ResidentsController::class, 'dados']);


Route::get('/building', [BuildingsController::class, 'index'])->name('building-list');
Route::get('/building/create', [BuildingsController::class, 'create']);
Route::post('/building/create', [BuildingsController::class, 'store']);

// $route->get('/', 'BuildingsController@create');