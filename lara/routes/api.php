<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/hello', [ExampleController::class, 'test']);

Route::post('/hello', [ExampleController::class, 'test']);

Route::post('/school', [SchoolController::class, 'create']);

Route::get('/school/{id}', [SchoolController::class, 'item']);

Route::get('/schools', [SchoolController::class, 'list']);

Route::put('/school/{id}', [SchoolController::class, 'update']);

Route::delete('/school/{id}', [SchoolController::class, 'delete']);



Route::post('/student', [StudentController::class, 'create']);

Route::get('/student/{id}', [StudentController::class, 'item']);

Route::get('/students', [StudentController::class, 'list']);

Route::put('/student/{id}', [StudentController::class, 'update']);

Route::delete('/student/{id}', [StudentController::class, 'delete']);