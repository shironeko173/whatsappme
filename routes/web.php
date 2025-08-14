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
|
*/

// Route::get('/new', function () {
//     return view('home');
// });

Route::get('/URL-Spesial', function () {
    return view('buaturl');
});

// Route::get('/YourLink', function () {
//     return view('success');
// });
 
Route::get('/{code}', [CreateWAController::class, 'link']);
Route::get('/YourLink/{urlacak}', [CreateWAController::class, 'show']);
Route::post('/create', [CreateWAController::class, 'store']);
Route::post('/send', [CreateWAController::class, 'create']);
Route::get('/', [CreateWAController::class, 'index']);
