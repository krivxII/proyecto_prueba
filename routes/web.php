<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\operationController;
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

Route::get('/operaciones/suma/{elemento1}/{elemento2}',[operationController::class,"suma"])->whereNumber('elemento1')->whereNumber('elemento2');
Route::get('/operaciones/resta/{elemento1}/{elemento2}',[operationController::class,"resta"])->whereNumber('elemento1')->whereNumber('elemento2');
Route::get('/operaciones/division/{elemento1}/{elemento2}',[operationController::class,"division"])->whereNumber('elemento1')->whereNumber('elemento2');
Route::get('/operaciones/multiplicacion/{elemento1}/{elemento2}',[operationController::class,"multiplicacion"])->whereNumber('elemento1')->whereNumber('elemento2');