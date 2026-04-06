<?php

use App\Http\Controllers\Api\ArtifactController;
use App\Http\Controllers\Api\EventsBlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


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