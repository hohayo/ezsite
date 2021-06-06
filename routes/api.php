<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/hw/times',  'App\Http\Controllers\Api\HwController@times');

Route::get('/name/{name}', 'App\Http\Controllers\Api\HelloController@hello');

Route::apiResource('tasks', 'App\Http\Controllers\Api\TaskController');

Route::apiResource('categories', 'App\Http\Controllers\Api\CategoryController');
Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');
Route::apiResource('tags', 'App\Http\Controllers\Api\TagController');

Route::get('tasks/title/query', 'App\Http\Controllers\Api\TaskController@query');

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('/', 'AuthController@me')->name('me');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
});