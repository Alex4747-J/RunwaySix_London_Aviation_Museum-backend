<?php

use App\Http\Controllers\Api\ArtifactController;
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
Route::get('/artifacts/{artifact}', [ArtifactController::class, 'show']);
Route::patch('/artifacts/{artifact}', [ArtifactController::class, 'update']);
Route::delete('/artifacts/{artifact}', [ArtifactController::class, 'destroy']);