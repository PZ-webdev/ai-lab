<?php

use App\Http\Controllers\TemperaturesController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return "<h1> Hello World! </h1>";
});

Route::get('greetings/{name?}', function (Request $request) {
    if (isset($request->name)) {
        return "Witaj $request->name !";
    } else {
        return "Witaj nieznajomy";
    }
});

Route::get('temperature/ctf/{c?}', [TemperaturesController::class, 'ctf']);
Route::get('temperature/ftc/{f?}', [TemperaturesController::class, 'ftc']);

Route::get('/zad8', function (Request $request) {
    //$request->merge(['x' => 0]);
    $br = "<br>";
    $r = $request->path() . $br .
        $request->url() . $br .
        $request->fullUrl() . $br .
        $request->method() . $br .
        $request->isMethod('post') . $br .
        $request->header('User-Agent') . $br .
        $request->ip() . $br .
        print_r($request->all(), true) . $br .
        $request->query('a') . $br .
        $request->query('b', 'brak b') . $br .
        print_r($request->query(), true) . $br .
        $request->a . $br .
        $request->has(['a', 'b']) . $br .
        $request->filled(['a']) . $br .
        " ";
    return $r;
});

Route::get('/hello', function (Request $request) {
    $name = $request->name;
    $arr = ['a', 'b', 'c', 'd', 'e'];
    return view('hello', ['name' => $name, 'arr' => $arr]);
});

Route::get('/trips', function(){
    return view('trips');
});
