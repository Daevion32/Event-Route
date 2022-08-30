<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


Route::get('/', function () {
    return view('home'); 
}); 


Auth::routes();

Route::get('/',[EventController::class, 'index'])->name('home');

//DELETE
Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('delete')->middleware('isadmin', 'auth');

// //CREATE

Route::get('/create',[EventController::class, 'create'])->name('createEvent')->middleware('isadmin', 'auth');
Route::post('/',[EventController::class, 'store'])->name('storeEvent');

//SHOW

Route::get('/show/{id}',[EventController::class, 'show'])->name('showEvent');

//UPDATE

Route::get('/edit/{id}', [EventController::class, 'edit'])->name('editEvent')->middleware('isadmin', 'auth');
ROute::patch('/event/{id}', [EventController::class, 'update'])->name('updateEvent');

