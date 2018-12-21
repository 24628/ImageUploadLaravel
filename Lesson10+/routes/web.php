<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}/edit', 'PostsController@update');
Route::get('/posts/{post}/delete', 'PostsController@destroy');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::prefix('profile')->group(function () {
    Route::get('/show/{user}', 'ProfileController@index');
    Route::get('/create', 'ProfileController@create')->name('profile.create');
    Route::post('/create', 'ProfileController@store');
    Route::get('/edit/{profile}', 'ProfileController@edit');
    Route::post('/edit/{profile}', 'ProfileController@update');
    Route::get('/delete/{profile}', 'ProfileController@destroy');
});

// Controller -> PostsController

// Elaquent model -> Post

// migration -> create_posts_table

