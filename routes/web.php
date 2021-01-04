<?php

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

Route::get('/hello', function () {
    return view('hello', ['name' => "Hello World."]);
});

//Route::get('/users/1', 'UserController@show');
Route::get('/videos', 'SearchVideoController@index')->name('videos');
Route::get('/videos/{ID}', 'PlayVideoController@index')->name('playvideos');
Route::get('/videos/{ID}/posts/create', 'CreateCommentController@index')->name('comment');
Route::get('/videos/{ID}/posts/delete', 'DeleteCommentController@index')->name('deletecomment');
Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/login', 'LoginController@index')->name('login');