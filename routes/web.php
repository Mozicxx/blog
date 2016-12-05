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

Route::get('/', function () {
    $users = ['Yangwanpeng', 'Mozic Yang'];
    return view('welcome', compact('users'));//compact 把$user 转化成 ['user' => ['Yangwanpeng','Mozic Yang']]
});
Route::get('user', 'UsersController@home');
Route::get('about', function () {
    return view('pages.about');
});

Route::get('posts', 'PostsController@index');
Route::get('posts/{post}', 'PostsController@show');
Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('comments/{comment}/edit', 'CommentsController@edit');
Route::get('comments/{comment}/delete', 'CommentsController@delete');
Route::patch('comments/{comment}', 'CommentsController@update');

//Route::post('/login', 'UsersController@login');
//Route::post('/register', 'UsersController@register');

Auth::routes();

Route::get('/home', 'HomeController@index');
