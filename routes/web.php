<?php


//});


Route::get('/', 'HomeController@welcome');

Route::get('hpage', 'HomeController@welcome');



// Admin routers
Auth::routes();

Route::get('/logout', 'HomeController@logout')->middleware('auth');
Route::get('/news', 'NewsController@index')->middleware('auth');
Route::get('/news/create', 'NewsController@create')->middleware('auth');
Route::post('/news/create', 'NewsController@save')->middleware('auth');
Route::get('/delete/newsp/{news}', 'NewsController@delete')->middleware('auth');;

Route::post('/delete/newspo/{news}', 'NewsController@deletePost')->middleware('auth');

Route::get('/edit/newsp/{news}', 'NewsController@edit')->middleware('auth');
Route::post('/edit/newspo/{news}', 'NewsController@editPost')->middleware('auth');

Route::get('/category', 'CategoryController@index')->middleware('auth');
Route::post('/category/create', 'CategoryController@save')->middleware('auth');

Route::get('/deletecat/catg/{categories}', 'CategoryController@deletecat')->middleware('auth');;
Route::post('/deletecat/catgpo/{categories}', 'CategoryController@deletecatPost')->middleware('auth');

Route::get('/updatecatg/catg/{categories}', 'CategoryController@updatecat')->middleware('auth');;
Route::post('/updatecatg/catgpo/{categories}', 'CategoryController@updatecatPost')->middleware('auth');


Route::get('/news/{category}', 'HomeController@news');
Route::get('/post/{id}', 'HomeController@read');
