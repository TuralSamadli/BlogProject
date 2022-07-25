<?php

use App\Http\Controllers\HomePageContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

// Route::get('/control', function () {
//     return view('new');
// });
Route::get('/',[HomePageContoller::class,'index'])->name('home');
Route::get('/control',  [AdminController::class,'return'])->name('new');
   Route::get('/control/about',[AdminController::class,'about'])->name('about');
   Route::get('/control/message',[AdminController::class,'message'])->name('message');

