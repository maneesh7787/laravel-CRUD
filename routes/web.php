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

Route::get('/homepage', function () {
    return view('home');
});

Route:: get('/','CreatesController@home');

Route:: get('/create', 'CreatesController@createBlog');

Route:: post('/insert', 'CreatesController@insertBlog');

Route::get('/update/{id}','CreatesController@updateBlog');

Route::post('/edit','CreatesController@editBlog');

Route::get('/read/{id}','CreatesController@readBlog');

Route::get('/delete/{id}','CreatesController@deleteBlog');


