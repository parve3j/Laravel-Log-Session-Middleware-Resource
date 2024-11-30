<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Log
Route::get('/sum/{num1}/{num2}',[DemoController::class,'DemoLog']);

// Session
Route::get('/session/{email}',[DemoController::class,'SessionPut']);
Route::get('/sessionpull',[DemoController::class,'SessionPll']);
Route::get('/sessionget',[DemoController::class,'SessionGet']);
Route::get('/sessioforget',[DemoController::class,'SessionForget']);
Route::get('/sessionflush',[DemoController::class,'SessionFlush']);

//Middleware
// Route::get('/demoaction', [MiddlewareController::class,'DemoAction'])->middleware([DemoMiddleware::class]);
Route::get('/demoaction/{key}', [MiddlewareController::class,'DemoAction'])->middleware([DemoMiddleware::class]);
Route::get('/demoaction_redirect', [MiddlewareController::class,'DemoRedirect']);

// Middleware grouping

Route::middleware([DemoMiddleware::class])->group(function(){
    Route::get('/hello_one', [MiddlewareController::class,'helloOne']);
    Route::get('/hello_two', [MiddlewareController::class,'helloTwo']);
    Route::get('/hello_three', [MiddlewareController::class,'helloThree']);
});

// Resource controller
Route::resource('photo',PhotoController::class);
