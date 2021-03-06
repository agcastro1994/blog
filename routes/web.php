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
//controller PostController
//eloquent model Post
//migration create_post_table


Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

ROUTE::post('/posts/{post}/comments', 'CommentsController@store');


// use App\Task;

// Route::get('/tasks', 'TaskController@index');

// Route::get('/tasks/{task}', 'TaskController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
