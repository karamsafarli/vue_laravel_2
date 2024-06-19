<?php

use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Home');
// });



// Route::get('/reviews', [ReviewController::class, 'index']);
// Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/download-app', [ReviewController::class, 'index']);