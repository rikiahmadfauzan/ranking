<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\RankController;

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

// Route::get('dashboard', [DashboardController:: class,'show']);
Route::get('dashboard',[DashboardController:: class,'index']);
Route::get('create',[DashboardController:: class,'create']);

Route::get('ranking', [RankController:: class,'show']);
Route::get('ranking/add',[RankController::class,'add']);
Route::post('ranking/create', [RankController::class, 'create']);
Route::post('ranking/update/{id}',[RankController::class,'update']);
Route::get('ranking/edit/{id}',[RankController::class,'edit']);

Route::get('layout1', [LayoutController:: class,'show1']);
Route::get('layout1/add1',[LayoutController::class,'add1']);
Route::post('layout1/create1', [LayoutController::class, 'create1']);
Route::post('layout1/update1/{id}',[LayoutController::class,'update1']);
Route::get('layout1/edit1/{id}',[layoutController::class,'edit1']);

Route::get('layout2', [LayoutController:: class,'show2']);
Route::get('layout2/add2',[LayoutController::class,'add2']);
Route::post('layout2/create2', [LayoutController::class, 'create2']);
Route::post('layout2/update2/{id}',[LayoutController::class,'update2']);
Route::get('layout2/edit2/{id}',[layoutController::class,'edit2']);

Route::get('layout3', [LayoutController:: class,'show3']);
Route::get('layout3/add3',[LayoutController::class,'add3']);
Route::post('layout3/create3', [LayoutController::class, 'create3']);
Route::post('layout3/update3/{id}',[LayoutController::class,'update3']);
Route::get('layout3/edit3/{id}',[layoutController::class,'edit3']);
