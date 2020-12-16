<?php

use Illuminate\Http\Request;

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
Route::get('keep-alive', function(){ return now() ; });

/* original code */
/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group( [ 'middleware' => 'auth:api'], function (){
    Route::group([ 'prefix' => 'user' ], function(){
    Route::get('post', 'UserController@index');
    Route::get('show/{id}', 'UserController@show');
    Route::post('post', 'UserController@store');
    Route::put('post', 'UserController@update');
    Route::delete('delete/{id}', 'UserController@destroy');
    });
});
