<?php

use App\Http\Controllers\affichageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;




//home page
Route::get('/',[DashbordController::class,'index'] )->name('dashboard');

Route::post('/affichages',[affichageController::class,'store'] )->name('affichages.store');

Route::get('/affichages/{affichage}',[affichageController::class,'show'] )->name('affichages.show');

Route::delete('/affichages/{id}',[affichageController::class,'destroy'] )->name('affichages.destroy')->middleware('auth');

Route::get('/news',[newsController::class,'index'] )->name('news');


Route::post('/affichages/{affichage}/comments',[CommentController::class,'store'] )->name('affichages.comments.store')->middleware('auth');

Route::get('/register',[AuthController::class,'register'] )->name('register');
Route::post('/register',[AuthController::class,'store'] );

Route::get('/login',[AuthController::class,'login'] )->name('login');
Route::post('/login',[AuthController::class,'authenticate'] );

Route::post('/logout',[AuthController::class,'logout'] )->name('logout');


Route::get('/parents',[AuthController::class,'showParents'] )->name('parents');
Route::get('/teachers',[AuthController::class,'showTeachers'] )->name('teachers');

Route::get('/messages', [MessageController::class, 'index'])->name('message.index');
Route::get('/messages/create/{recipient_id?}/{recipient_name?}', [MessageController::class, 'create'])->name('message.create');
Route::get('/messages/create', [MessageController::class, 'create'])->name('message.create');

Route::post('/messages', [MessageController::class, 'store'])->name('message.store');
Route::get('/messages/from/{sender_id}', [MessageController::class, 'messagesFromSender'])->name('messages.from');


route::resource('users',UserController::class)->only('show','edit','update')->middleware('auth');
Route::get('/prorile',[UserController::class,'profile'] )->name('profile')->middleware('auth');


route::group(['middleware'=>['parent']],function(){
     Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
  Route::post('students/create', [StudentController::class, 'store'])->name('students.store');
});