<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[EventController::class,'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


//show 

Route::get('/show/{id}',[EventController:: class,'show'])->name("showEvent");

//inscribir---Desinscribirse.

// Route::get('/inscribir/{id}',[  EventController:: class,'inscribir'])->name('inscribir');