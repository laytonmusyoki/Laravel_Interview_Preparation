<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[CrudController::class,'index'])->name('index');
Route::get('/add',[CrudController::class,'add'])->name('add');
Route::post('/add',[CrudController::class,'addpost']);
Route::get('/delete/{id}',[CrudController::class,'delete'])->name('delete');
Route::get('/update/{id}',[CrudController::class,'update']);
Route::post('/update/{id}',[CrudController::class,'updatepost']);