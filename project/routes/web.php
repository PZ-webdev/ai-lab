<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TripsController;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function(){
    return redirect()->route('trips.index');
});

Route::get('/test', function () {
    return DB::select('select * from test_table');
});

Route::get('/trip_test', function () {
    return print_r(Trip::all(), true);
});

Route::resource('trips', TripsController::class);
Route::resource('country', CountriesController::class)->middleware('auth');

// Route::controller(CountriesController::class)->group(function () {
//     Route::get('/country', 'index');
//     Route::get('/country/create', 'create');
//     Route::post('/country/store', 'store');
// });