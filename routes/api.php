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

Route::group(['prefix' => 'v1.0'], function () {
    /**
     * this Block Route For Testing without middleware
     */
    Route::get('all-article', 'API\ArticleController@index');

    /**
     * this Block Route For URL with Middleware Protection
     */

});
