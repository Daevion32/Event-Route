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
|
*/

Route::get('/', function () {
    return view('welcome'); 
});



Auth::routes();

<<< HEAD
Route::get('/',[EventController::class, 'index'])->name('welcome');

Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('delete');
=======
Route::get('/',[EventController::class, 'index']);
Route::get('/home',[EventController::class, 'index']);

>>>>>>> d997140b28af7ac081f84b234aa5db7ad517881d

//CREATE

Route::get('/create',[EventController::class, 'create'])->create('createEvent');
Route::post('/',[EventController::class, 'store'])->create('storeEvent');
