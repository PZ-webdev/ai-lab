<?php

use App\Http\Controllers\TripsController;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;
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

Route::get('/test', function () {
    return DB::select('select * from test_table');
});

Route::get('/trip_test', function () {
    return print_r(Trip::all(), true);
});

Route::resource('trips', TripsController::class);