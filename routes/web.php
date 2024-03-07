<?php

use App\Http\Controllers\GestionEmployeeController;
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

Route::get('/pixler', function () {
    $pixler = "Pixler";
    return view('hello_world', ['name' => '']);
});

Route::resource('employee', GestionEmployeeController::class);