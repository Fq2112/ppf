<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/', 'namespace' => 'Pages'], function () {

    Route::get('/', [
        'uses' => 'PPFController@index',
        'as' => 'home'
    ]);

    Route::get('product-overview', [
        'uses' => 'PPFController@showProductOverview',
        'as' => 'show.product-overview'
    ]);

    Route::group(['prefix' => 'gallery'], function () {

        Route::get('/', [
            'uses' => 'PPFController@showGallery',
            'as' => 'show.gallery'
        ]);

        Route::get('data', [
            'uses' => 'PPFController@getDataGallery',
            'as' => 'get.data.gallery'
        ]);

    });

    Route::group(['prefix' => 'installers'], function () {

        Route::get('/', [
            'uses' => 'PPFController@showInstallers',
            'as' => 'show.installers'
        ]);

        Route::get('{city}', [
            'uses' => 'PPFController@getCityInstallers',
            'as' => 'get.city.installers'
        ]);

        Route::post('contact/submit', [
            'uses' => 'PPFController@submitContactInstallers',
            'as' => 'submit.contact.installers'
        ]);

        Route::post('certification/submit', [
            'uses' => 'PPFController@submitCertification',
            'as' => 'submit.certification'
        ]);

    });

    Route::group(['prefix' => 'contact'], function () {

        Route::get('/', [
            'uses' => 'PPFController@showContact',
            'as' => 'show.contact'
        ]);

        Route::post('submit', [
            'uses' => 'PPFController@submitContact',
            'as' => 'submit.contact'
        ]);

    });

    Route::get('{lang}', function (){
        return view('errors.maintenance');
    });

});
