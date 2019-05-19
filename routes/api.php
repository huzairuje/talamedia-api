<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {
    /**
     * this Block Route For Testing without middleware
     */
    Route::get('all-article', 'API\ArticleController@index');
    Route::get('article/{id}', 'API\ArticleController@getArticleById');


    Route::get('all-user', 'API\UserController@index');
    Route::get('user/{id}', 'API\UserController@getUserById');

    Route::get('all-ads', 'API\AdsController@index');
    Route::get('ads/{id}', 'API\AdsController@getAdsById');

    /**
     * this Block Route For URL with Middleware Protection
     */

});
