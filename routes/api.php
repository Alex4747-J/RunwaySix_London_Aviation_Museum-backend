<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ArtifactController;
use App\Http\Controllers\Api\EventsBlogController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\RemembranceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


/**
 * Contact API Routes
 */

Route::post('/contact', [ContactController::class, 'index']);

/**
 * Login Routes
 */

//Route::post('/login', [AuthController::class, 'login'])->middleware('web'); 
//-> Do not use this one sice we don't want to use sessions for authentication, we want to use tokens. The 'web' middleware is for session based authentication, we want to use 'auth:sanctum' middleware for token based authentication. The login route should not be protected by any middleware since it's the route that issues the token.

Route::post('/login', [AuthController::class, 'login']);

Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

/**
 * Artifacts API Routes
 */

Route::get('/artifacts', [ArtifactController::class, 'index']);
Route::post('/artifacts', [ArtifactController::class, 'store'])->middleware('auth:sanctum');
Route::get('/artifacts/admin', [ArtifactController::class, 'adminIndex'])->middleware('auth:sanctum');
Route::get('/artifacts/{artifact}', [ArtifactController::class, 'show'])->whereNumber('artifact');
Route::patch('/artifacts/{artifact}', [ArtifactController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/artifacts/{artifact}', [ArtifactController::class, 'destroy'])->middleware('auth:sanctum');
Route::post('/artifacts/{artifact}/restore', [ArtifactController::class, 'restore'])->middleware('auth:sanctum');

/**
 * Events/Blogs API Routes
 */

Route::get('/events-blogs', [EventsBlogController::class, 'index']);
Route::get('/events-blogs/admin', [EventsBlogController::class, 'adminIndex'])->middleware('auth:sanctum');
Route::post('/events-blogs', [EventsBlogController::class, 'store'])->middleware('auth:sanctum');
Route::get('/events-blogs/{eventsBlog}', [EventsBlogController::class, 'show'])->whereNumber('eventsBlog');
Route::patch('/events-blogs/{eventsBlog}', [EventsBlogController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/events-blogs/{eventsBlog}', [EventsBlogController::class, 'destroy'])->middleware('auth:sanctum');
Route::post('/events-blogs/{eventsBlog}/restore', [EventsBlogController::class, 'restore'])->middleware('auth:sanctum');

/**
 * Remembrance API Routes
 */

Route::get('/remembrances', [RemembranceController::class, 'index']);
Route::get('/remembrances/search', [RemembranceController::class, 'search']);
Route::post('/remembrances', [RemembranceController::class, 'store'])->middleware('auth:sanctum');
Route::get('/remembrances/admin', [RemembranceController::class, 'adminIndex'])->middleware('auth:sanctum');
Route::get('/remembrances/{remembrance}', [RemembranceController::class, 'show'])->whereNumber('remembrance');
Route::patch('/remembrances/{remembrance}', [RemembranceController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/remembrances/{remembrance}', [RemembranceController::class, 'destroy'])->middleware('auth:sanctum');
Route::post('/remembrances/{remembrance}/restore', [RemembranceController::class, 'restore'])->middleware('auth:sanctum');