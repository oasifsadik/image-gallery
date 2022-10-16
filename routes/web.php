<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('master');
});

Auth::routes();
//category
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/add-category',[HomeController::class, 'add']);
Route::post('/save',[HomeController::class, 'save']);
Route::get('/edit/{id}',[HomeController::class, 'edit']);
Route::post('/update/{id}',[HomeController::class, 'update']);
Route::get('/delete/{id}',[HomeController::class, 'delete']);
