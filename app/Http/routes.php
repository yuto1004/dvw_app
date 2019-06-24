<?php

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', 'MapController@welcome');

    Route::get('/map/search/', 'MapController@search');

    Route::resource('/shops', 'ShopController');

    Route::resource('/review', 'ReviewController');

    Route::get('/review/{id}/delete', 'ReviewController@destroy');

    Route::resource('users','UserController',['only' => 'show']);

});
