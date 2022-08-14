<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


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



   Route::get('/',[HomePageController::class,'index'])->name('home');
   Route::post('/send', [HomePageController::class, 'user_messages'])->name('user_messages');
   Route::get('/login',[LoginController::class,'index'])->name('login');
   Route::post('/login',[LoginController::class,'authenticate'])->name('login.index');
   // Route::middleware(['auth'])->group(function () {
    Route::prefix('control')->group(function () {
  
   Route::get('/',  [AdminController::class,'return'])->name('new');
   Route::get('/user', [AdminController::class,'index'])->name('user');
   Route::get('/about', [AdminController::class,'store'])->name('store.index');
   Route::get('/general',[ContactController::class,'index'])->name('index');
   Route::get('/contact',[ContactController::class,'update'])->name('contact.store');
   Route::get('/messages',[MessagesController::class,'index'])->name('message.index');
   Route::get('/logout',[LogoutController::class,'logout'])->name('logout.index');
});
// });