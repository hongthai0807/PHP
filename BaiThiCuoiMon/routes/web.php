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
      return view('login');
  });
Route::get('/admin',[FeedbackController::class,'admin']);
Route::post('/user',[FeedbackController::class,'checksession']);
Route::get('/logout',function(){
  Session()->forget('va');
  session()->forget('van');
  if(!Session()->has('va') and  !session()->has('van')){
    return view('login');
  }
});
Route::get('/logout1',function(){
  Session()->forget('1');
  session()->forget('2');
  if(!Session()->has('1') and  !session()->has('2')){
    return view('login');
  }
});
Route::get('/logout2',function(){
  Session()->forget('3');
  session()->forget('4');
  if(!Session()->has('3') and  !session()->has('4')){
    return view('login');
  }
});

Route::get('/feedback',[FeedbackController::class,'feedback']);
Route::get('/student',[FeedbackController::class,'student']);
Route::get('/history',[FeedbackController::class,'history']);
Route::get('/teacher',[FeedbackController::class,'teacher']);
Route::get('/addstudent',[FeedbackController::class,'addstudent']);
Route::post('/addstudent',[FeedbackController::class,'editstudent']);
Route::get('/editstudent',[FeedbackController::class,'crudstudent']);
Route::get('/user',[UsersController::class,'info']);
Route::get('/addteacher',[FeedbackController::class,'addteacher']);
Route::post('/addteacher',[FeedbackController::class,'editteacher']);
Route::get('/editteacher',[FeedbackController::class,'crudteacher']);
?>


