<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('layout.master');

})->name('welcome');

Route::group([
    'as'=>'users.',
    'prefix'=>'users',
],function(){
    Route::get('/',[UserController::class,'index'])->name('index');
});