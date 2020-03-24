<?php

use Illuminate\Http\Request;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
// Route::get('book/{limit}/{offset}', "BookController@getAll");

Route::middleware(['jwt.verify'])->group(function(){

	// Route::get('/book', 'BookController@index');
	// Route::get('/book/{id}', 'BookController@show');
	// Route::post('/book', 'BookController@store');
	// Route::put('/book/{id}', 'BookController@update');
	// Route::delete('/book/{id}', 'BookController@destroy');

	// buku
	// Route::post('book/store', 'BookController@store');
	Route::get('book/{limit}/{offset}', "BookController@getAll");
	// Route::post('book/{limit}/{offset}', "BookController@find");
	Route::delete('book/delete/{id}', "BookController@delete");
	Route::post('/book/ubah', "BookController@ubah");
	Route::post('/book/{limit}/{offset}', 'BookController@find');
	Route::post('/book/register', 'BookController@register');
	// Route::post('/book/ubah', "BookController@ubah");
	Route::get('/book/{id}', 'BookController@show');
	// Route::post('/book/store', 'BookController@store');
	Route::put('/book/{id}', 'BookController@update');
	Route::delete('/book/{id}', 'BookController@destroy');

	//user
	Route::get('user/{limit}/{offset}', "UserController@getAll");
	Route::post('user/{limit}/{offset}', "UserController@find");
	Route::delete('user/delete/{id}', "UserController@delete");
	Route::post('user/ubah', "UserController@ubah");

	//cek login
	Route::get('user/check' , "UserController@getAuthenticatedUser");


	// Peminjam
	Route::post('pinjam/{id}', "PinjamController@index");
	Route::post('kembali/{id}', "PinjamController@kembali");
	Route::get('pinjam/{limit}/{offset}', "PinjamController@getAll");
});
