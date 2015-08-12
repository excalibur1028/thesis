<?php

Route::get('/', [
    'as'    => 'home',
    'uses'  => 'PagesController@home'
]);

Route::group(['prefix' => 'window-treatments'], function()
{
    Route::get('/', [
        'as'    => 'treatments',
        'uses'  => 'TreatmentsController@index'
    ]);

    Route::get('/{slug}', [
        'as'    => 'treatment.show',
        'uses'  => 'TreatmentsController@show'
    ]);
});

// Application authentication and registration routes...
Route::group(['prefix' => 'account'], function()
{
    Route::get('/', [
        'as'    => 'account',
        'uses'  => 'Auth\AuthController@index'
    ]);

    Route::post('login', [
        'as'    => 'session.store',
        'uses'  => 'Auth\AuthController@postLogin'
    ]);

    Route::get('logout', [
        'as'    => 'session.destroy',
        'uses'  => 'Auth\AuthController@getLogout'
    ]);

    Route::post('register', [
        'as'    => 'register.store',
        'uses'  => 'Auth\AuthController@postRegister'
    ]);

    Route::get('register/confirm/{token}', [
        'as'    => 'register.confirm',
        'uses'  => 'Auth\AuthController@getRegisterConfirm'
    ]);
});
