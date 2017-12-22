<?php

Route::get('/test', 'DemoController@test');
Route::get('chat', function(){
    return view('chat');
});

Route::get('/demo', 'DemoController@index');
Route::get('/demo/players', 'DemoController@players');
Route::post('/demo/player', 'DemoController@player');

Auth::routes();

Route::get('/', 'PostsController@index')->name('home');

Route::resource('awards', 'AwardsController');
Route::resource('categories', 'CategoriesController')->except('show');

Route::get('categories/{category}', 'PostsController@category_post_show');



Route::resource('clubs', 'ClubsController');
Route::resource('countries', 'CountriesController');
Route::resource('cups', 'CupsController');
Route::get('/dashboard', 'AdminController@index');
Route::resource('galleries', 'GalleriesController');
Route::resource('games', 'GamesController');
Route::resource('leagues', 'LeaguesController');
Route::resource('players', 'PlayersController');
Route::resource('posts', 'PostsController');

Route::name('posts.like')->post('/like/{post}', 'PostsController@like');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::resource('prizes', 'PrizesController');
Route::resource('seasons', 'SeasonsController');
Route::resource('stadiums', 'StadiaController');
Route::resource('standings', 'StandingsController');
Route::resource('statistics', 'StatisticsController');
Route::resource('stats', 'StatsController');
Route::resource('taggings', 'TaggingsController');
Route::resource('tags', 'TagsController');
Route::resource('titles', 'TitlesController');
Route::resource('weeks', 'WeeksController');
Route::get('/markAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
});











