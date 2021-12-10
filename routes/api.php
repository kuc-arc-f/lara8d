<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// ApiTasksController
Route::post('/tasks/delete', [App\Http\Controllers\api\ApiTasksController::class, 'delete']);
Route::post('/tasks/update', [App\Http\Controllers\api\ApiTasksController::class, 'update']);
Route::get( '/tasks/show', [App\Http\Controllers\api\ApiTasksController::class, 'show']);
Route::get('/tasks/list', [App\Http\Controllers\api\ApiTasksController::class, 'list']);
Route::post('/tasks/create', [App\Http\Controllers\api\ApiTasksController::class, 'create']);
//TestController
Route::post('/test/test1', [App\Http\Controllers\TestController::class, 'test1']);
//
Route::get('/hello', function () {
    return 'Hello Next.js, from Laravel API';
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
