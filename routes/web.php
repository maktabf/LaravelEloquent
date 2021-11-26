<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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
// Flight:where('active',1)->get()
Route::get('/', function () {
//return \App\Models\User::find(1)->phone()->get();
//return \App\Models\User::find(1)->phone;
//    return \App\Models\Phone::find(1)->user()->get();

//    return \App\Models\City::find(1)->country()->get();
//    return \App\Models\City::find(1)->country;
//        return \App\Models\Country::find('IRN')->cities()->where('Population','>',1000000)->get();
    return \App\Models\Country::where('GovernmentForm','Republic')->get()->load('capital')->pluck('capital');
});



// CRUD
// All + Single + Update + Create
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars', [CarController::class, 'index']);
Route::delete('/cars/{car}', [CarController::class, 'destroy']);
Route::patch('/cars/{car}', [CarController::class, 'update']);
Route::get('/cars/{car}', [CarController::class, 'show'])->name('show.car');
