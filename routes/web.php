<?php

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
// DB::listen(function ($event) {
//     dump($event->sql);
// });

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/hello', 'TestController@index');

Auth::routes();
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController')->except(['edit,update']);

Route::get('/home', 'HomeController@index')->name('home');
