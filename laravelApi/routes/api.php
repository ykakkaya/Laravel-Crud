<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('student', [StudentController::class, 'getAllItems']);
Route::get('student/{id}', [StudentController::class, 'getItem']);
Route::post('student', [StudentController::class, 'createItem']);
Route::put('student/{id}', [StudentController::class, 'updateItem']);
Route::delete('student/{id}', [StudentController::class, 'deleteItem']);
