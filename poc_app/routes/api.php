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
// Protecting Routes
// Via Middleware
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




// Protecting Routes
// Via Middleware
Route::post('login', 'AuthController@login');



Route::middleware(['auth:api', 'role'])->group(function() {
// Route::middleware(['auth:api'])->group(function() {

    // Route::get('/user', function(Request $request) {
    //     return response()->json(['success' => false, 'message'   => 'Great you have access'], 400);
    // });

     // Delete User
     Route::middleware(['scope:basic'])->group(function() {
         Route::get('loginTest', 'AuthController@loginTest');
         Route::post('revokeTokenLogout', 'AuthController@revokeTokenLogout');
    });
});


Route::get('/players', 'PlayerController@index');
Route::get('/players/{id}', 'PlayerController@show');
Route::post('/players', 'PlayerController@store');
Route::post('/players/{id}/answers', 'PlayerController@answer');
Route::delete('/players/{id}', 'PlayerController@delete');
Route::delete('/players/{id}/answers', 'PlayerController@resetAnswers');


// Route::get('/user', function () {
//     //
// })->middleware('auth:api');
