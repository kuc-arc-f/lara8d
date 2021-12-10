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
//TestController
Route::post('/test/test1', [App\Http\Controllers\TestController::class, 'test1']);

Route::get('/hello', function () {
    return 'Hello Next.js, from Laravel API';
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
