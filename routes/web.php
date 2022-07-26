<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UploadController;

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
   Route::get('/upload',[UploadController::class,'index'])->name('file.index');

   Route::post('/fileupload',[UploadController::class,'upload'])->name('file.upload');
   Route::get('/login',[LoginController::class,'index'])->name('login');
   Route::post('/login',[LoginController::class,'authenticate'])->name('login.index');

   // Route::middleware(['auth'])->group(function () {
    Route::prefix('control')->group(function () {
  
   Route::get('/',  [AdminController::class,'return'])->name('new');
   Route::get('/user', [AdminController::class,'index'])->name('user');
   Route::post('/user/edit', [AdminController::class,'update'])->name('user.update');
   Route::get('/general',[ContactController::class,'index'])->name('index');
   Route::post('/contact',[ContactController::class,'update'])->name('contact.update');
   Route::get('/messages',[MessagesController::class,'index'])->name('message.index');
   Route::post('/messages/delete',[MessagesController::class,'delete'])->name('message.delete');
   Route::get('/resume',[ResumeController::class,'index'])->name('resume.index');
   Route::get('/resume/edit',[ResumeController::class,'edit'])->name('resume.edit');
   Route::post('/resume/update',[ResumeController::class,'update'])->name('resume.update');
   Route::post('/resume/delete',[ResumeController::class,'delete'])->name('resume.delete');
   Route::get('/logout',[LogoutController::class,'logout'])->name('logout.index');

});
// });