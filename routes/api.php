<?php

use App\Http\Controllers\Api\ArtifactController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\EventsBlogController;
use App\Http\Controllers\Api\RemembranceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/**
 * Contact API Routes
 */

Route::post('/contact', [ContactController::class, 'index']);

/**
 * Login Routes
 */

Route::post('/login', [AuthController::class, 'login'])->middleware('web');

Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

/**
 * Artifacts API Routes
 */

Route::get('/artifacts', [ArtifactController::class, 'index']);
Route::post('/artifacts', [ArtifactController::class, 'store']);
Route::get('/artifacts/admin', [ArtifactController::class, 'adminIndex']);
Route::get('/artifacts/{artifact}', [ArtifactController::class, 'show']);
Route::patch('/artifacts/{artifact}', [ArtifactController::class, 'update']);
Route::delete('/artifacts/{artifact}', [ArtifactController::class, 'destroy']);
Route::post('/artifacts/{artifact}/restore', [ArtifactController::class, 'restore']);

/**
 * Events/Blogs API Routes
 */

Route::get('/events-blogs', [EventsBlogController::class, 'index']);
Route::get('/events-blogs/featured', [EventsBlogController::class, 'featured']);
Route::get('/events-blogs/admin', [EventsBlogController::class, 'adminIndex']);
Route::post('/events-blogs', [EventsBlogController::class, 'store']);
Route::get('/events-blogs/{eventsBlog}', [EventsBlogController::class, 'show']);
Route::patch('/events-blogs/{eventsBlog}', [EventsBlogController::class, 'update']);
Route::delete('/events-blogs/{eventsBlog}', [EventsBlogController::class, 'destroy']);
Route::post('/events-blogs/{eventsBlog}/restore', [EventsBlogController::class, 'restore']);

/**
 * Remembrance API Routes
 */

Route::get('/remembrances', [RemembranceController::class, 'index']);
Route::get('/remembrances/search', [RemembranceController::class, 'search']);
Route::post('/remembrances', [RemembranceController::class, 'store']);
Route::get('/remembrances/admin', [RemembranceController::class, 'adminIndex']);
Route::get('/remembrances/{remembrance}', [RemembranceController::class, 'show']);
Route::patch('/remembrances/{remembrance}', [RemembranceController::class, 'update']);
Route::delete('/remembrances/{remembrance}', [RemembranceController::class, 'destroy']);
Route::post('/remembrances/{remembrance}/restore', [RemembranceController::class, 'restore']);