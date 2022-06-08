<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpDataController;
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

Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/employes',[HomeController::class, 'emp_data'])->name('home.emp_data');
Route::get('/insert',[HomeController::class, 'insert'])->name('home.insert');
Route::get('/update',[HomeController::class, 'update'])->name('home.update');
Route::get('/delete',[HomeController::class, 'delete'])->name('home.delete');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');

//for controllers
Route::resource('emp_data', EmpDataController::class);
Route::resource('view_data', EmpDataController::class);
