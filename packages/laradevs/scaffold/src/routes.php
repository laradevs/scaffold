<?php
Route::group(['prefix' => config('scaffold.routes.prefix'),'namespace'=>'Laradevs\Scaffold\Controllers'], function () {
    Route::get(config('scaffold.routes.main.url'), 'ScaffoldMainController@index')->name(config('scaffold.routes.main.name'));
});

