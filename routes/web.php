<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
// use App\Http\Controllers\PizzaController;

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

// two different kinds of calling - from laravel 8
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');
Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create');
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show');
Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy');

