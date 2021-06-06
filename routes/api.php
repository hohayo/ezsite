<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Article;

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

Route::middleware('auth:api')->group(function() {
    Route::apiResource('tasks', 'App\Http\Controllers\Api\TaskController');
});
Route::get('tasks/title/query', 'App\Http\Controllers\Api\TaskController@query');

Route::apiResource('categories', 'App\Http\Controllers\Api\CategoryController');
Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');
Route::apiResource('tags', 'App\Http\Controllers\Api\TagController');

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('/', 'AuthController@me')->name('me');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
});

Route::group(['namespace' => '\Javck\Ezlaravel\Http\Controllers'], function () {
    Route::get('items/show', 'ApiController@showSingleItem');
    Route::get('items/{item}', 'ApiController@queryItem');
    //Official
    Route::post('areas/queryByCounty', 'ApiController@queryAreas');
    Route::post('elements/queryPositions', 'ApiController@queryPositions');
    Route::post('elements/queryElementModes', 'ApiController@queryElementModes');
});

Route::get('/posts',function() {

    $articles = Article::get();

    return response()->json([
        'status' => 1,
        'data' => $articles
    ])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
});