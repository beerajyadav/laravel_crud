<?php

use App\Http\Controllers\mycontroller;
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
// Route::view('/', 'insertRead');
Route::post('/insertdata',[mycontroller::class, 'insert'] );
Route::get('/',[mycontroller::class, 'readdata'] );
Route::get('updatedelete', [mycontroller::class, 'updatedelete'] );