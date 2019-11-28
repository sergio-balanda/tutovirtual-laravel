<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/security/login', 'Security\LoginController@index')->name('login');
Route::post('/security/login', 'Security\LoginController@index')->name('login.post');

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('', 'AdminController@index')->name('admin');
    Route::resource('/permission', 'PermissionController');
    Route::resource('/rols', 'RolController');
});
