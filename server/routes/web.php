<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});



Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'showUsers');
    Route::get('/users/{id}', 'showUser');
    Route::put('/users/{id}', 'addUser')->name('addUser');
    Route::post('/users/{id}', 'updateUser')->name('updateUser');
    Route::delete('/users/{id}', 'deleteUser')->name('deleteUser');
    Route::get('/users/{id}/videos', 'listVideosOfUser')->name('listVideosOfUser');
    Route::get('/videos', 'listVideos')->name('listVideos');
    Route::get('/videos/{id}', 'videoPage');
    Route::post('/videos/{id}', 'updateVideo');
    Route::put('/videos/{id}', 'addVideo');
    Route::delete('/videos/{id}', 'deleteVideo');
});
