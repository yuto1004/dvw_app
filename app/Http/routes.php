<?php

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', 'MapController@welcome');

    Route::get('/map/search/', 'MapController@search');

    Route::get('/about','MapController@about');

    Route::get('shops/index', 'ShopController@index');
    Route::get('shops/show/{id}', 'ShopController@show');

    Route::resource('/shops', 'ShopController');

    Route::resource('/review', 'ReviewController');
    Route::get('/review/creation/{id}','ReviewController@creation');

    Route::get('/review/{id}/delete', 'ReviewController@destroy');

    Route::resource('users','UserController',['only' => 'show']);

});
