<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return 'this is router page';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blogs', 'BlogsController@index')->name('blogs');
Route::get('/blogs/trash', 'BlogsController@trash')->name('blogs.trash');
Route::get('/blogs/trash/{id}/restore', 'BlogsController@restore')->name('blogs.restore');
Route::delete('/blogs/trash/{id}/permanent-delete', 'BlogsController@permanentDelete')->name('blogs.restpermanent-deleteore');

Route::get('/blogs/create', 'BlogsController@create')->name('blogs.create');
Route::post('/blogs/store', 'BlogsController@store')->name('blogs.store');
Route::get('/blogs/{id}', 'BlogsController@show')->name('blogs.show');
Route::get('/blogs/{id}/edit', 'BlogsController@edit')->name('blogs.edit');
Route::delete('/blogs/{id}/delete', 'BlogsController@delete')->name('blogs.delete');
Route::patch('/blogs/{id}/update', 'BlogsController@update')->name('blogs.update');