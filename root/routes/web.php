<?php

use App\Http\Controllers\MerchandiseController;
use App\Models\Merchandise;
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

Route::get('/home',function() {
    return view('home');
});



Route::get('/merchandise',[MerchandiseController::class,'index']);

Route::get('/classification',function() {
    return view('classification');
});

Route::get('/quantity',function() {
    return view('quantity');
});

Route::get('/number',function() {
    return view('number');
});

Route::get('/label',function() {
    return view('label');
});
