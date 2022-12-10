<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAPIController;

use App\Http\Controllers\ContentAPIController;

use App\Http\Controllers\ImageAPIController;

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

/* User Route */
Route::get('user', [UserAPIController::class, 'index'])->name('user.index');

/* Content Route */
Route::get('content', [ContentAPIController::class, 'index'])->name('content.index');

/* Image Route */
Route::get('image', [ImageAPIController::class, 'index'])->name('image.index');


