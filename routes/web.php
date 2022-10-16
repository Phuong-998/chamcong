<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TimekeepingController;
use App\Http\Controllers\StatisticalController;
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

Route::get('/',[EmployeeController::class,'index'])->name('employee');

Route::get('/Add/Employee',[EmployeeController::class,'add'])->name('add.employee');
Route::post('/handl/Add/Employee',[EmployeeController::class,'handlAddEmployee'])->name('handl.add.employee');

Route::get('/Edit/Employee',[EmployeeController::class,'edit'])->name('edit.employee');
Route::post('/handl/Edit/Employee',[EmployeeController::class,'handlEditEmployee'])->name('handl.edit.employee');

Route::get('/Delte/Employee',[EmployeeController::class,'delete'])->name('delete.employee');

Route::get('Timekeeping',[TimekeepingController::class,'index'])->name('timekeeping');
Route::post('/Add/Timekeeping',[TimekeepingController::class,'add'])->name('add.timekeeping');

Route::get('/Statistical',[StatisticalController::class,'index'])->name('statistical');

Route::post('search/statistical',[StatisticalController::class,'search'])->name('search.statistical');