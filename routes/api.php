<?php

use Illuminate\Http\Request;

use App\BattlePrivate;
use App\BattlePublic;

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



Route::get('battles/private', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return BattlePrivate::all();
})->middleware('jwt');



Route::get('battles/public', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return BattlePublic::all();
});

Route::post('user/register', 'APIRegisterController@register');
Route::post('user/login', 'APILoginController@login');

//Protected route using jwt
Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});

Route::get('/private-scoped', function (Request $request) {
    return response()->json([
        "message" => "Hello from a private endpoint! You need to have a valid Access Token and a scope of read:messages to see this."
    ]);
})->middleware('check.scope:full_access');