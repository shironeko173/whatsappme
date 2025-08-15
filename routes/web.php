<?php

use App\Http\Controllers\CreateWAController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|aa
*/


Route::get('/{code}', [CreateWAController::class, 'link']);
Route::get('/YourLink/{urlacak}', [CreateWAController::class, 'show']);
Route::post('/create', [CreateWAController::class, 'store']);
Route::post('/send', [CreateWAController::class, 'create']);
Route::get('/', [CreateWAController::class, 'index']);
Route::get('/URL-Spesial', [CreateWAController::class, 'generate']);
Route::get('/special-test-url', [CreateWAController::class, 'generate']);
// Di routes/web.php
// routes/web.php
Route::get('/URL-Spesial-debug', function() {
    return app()->make(\App\Http\Controllers\CreateWAController::class)->generate();
})->withoutMiddleware(['web']);
Route::fallback(function () {
    return response()->json([
        'debug_info' => [
            'current_url' => url()->current(),
            'request_uri' => $_SERVER['REQUEST_URI'] ?? null,
            'headers' => request()->headers->all(),
            'trusted_proxies' => config('trustedhost.proxies')
        ],
        'message' => 'Route not found'
    ], 404);
});
// Route::get('/URL-Spesial', function () { return view('buaturl'); });
