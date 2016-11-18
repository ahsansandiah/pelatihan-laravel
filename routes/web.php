<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/daftar-post', 'PostController@getAll');
Route::get('/detail-post/{id}', 'PostController@show');
Route::get('/delete-post/{id}', 'PostController@destroy');
Route::get('/create-post', 'PostController@create');
Route::post('/create-post/store', 'PostController@store');
Route::get('/edit-post/{id}', 'PostController@edit');
Route::post('/edit-post/update/{id}', 'PostController@update');

//comment code
Route::post('send-comment', 'PostController@sendComment'); 
Route::post('send-comment-single', 'BlogController@sendCommentSingle'); 

//send email
Route::get('send-mail', 'PostController@sendMail');

Route::get('beranda', 'BlogController@beranda');
Route::get('post/{id}', 'BlogController@single');





// ABAIKAN SAJA
Route::get('/admin-page', function () {
    echo "Wellcome to admin page ^^";
})->middleware(['auth','is_admin']);

Route::get('/access-denied', function () {
    echo "You do not have access to admin page :P";
});
