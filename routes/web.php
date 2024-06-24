<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelicScorerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class, 'index')->name('home');

Route::get('/characters', [CharacterController::class, 'index'])->name('characters');

Route::get('/characters/{character:tag}', [CharacterController::class, 'detail'])->name('characters.detail');

Route::get('/relic-scorer', [RelicScorerController::class, 'index'])->name('relic-scorer');

Route::get('/achievements', function () {
    return view('pages.achievements');
})->name('achievements');

Route::get('/databank', function () {
    return view('pages.databank');
})->name('databank');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
