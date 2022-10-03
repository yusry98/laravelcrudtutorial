<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route:: get('crud', [LaravelCrud::Class, 'index'])->middleware('auth');
Route:: post('add', [LaravelCrud::Class, 'add']);
Route::get('edit/{id}',[LaravelCrud::class, 'edit'])->middleware('auth');
Route::post('update',[LaravelCrud::class, 'update'])->name('update');
Route::get('delete/{id}',[LaravelCrud::class, 'delete']);