<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

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

 Route::get('/', function () {
      return view('welcome');
  });
Route::get('/admin',[App\Http\Controllers\FeedbackController::class,'admin'])->name('admin');
Route::post('/user',[FeedbackController::class,'checksession'])->name('user');

Route::get('/login',function(){
    if(session()->has('email')){
        return redirect('admin');
    }
  return view('login');
})->name('login');
Route::get('/logout',function(){
  Session()->forget('email');
  if(!Session()->has('email')){
    return view('login');
  }
});
Route::get('/feedback',[FeedbackController::class,'feedback']);
Route::get('/student',[FeedbackController::class,'student']);
Route::get('/History',[FeedbackController::class,'history']);
?>
