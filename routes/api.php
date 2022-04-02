<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

route::get('/zen',[\App\Http\Controllers\WrapperController::class, 'zen'])
    ->middleware(\App\Http\Middleware\NPMmiddleware::class)
    ->name('zen');
route::get('/emojis',[\App\Http\Controllers\WrapperController::class, 'emojis'])
    ->middleware(\App\Http\Middleware\NPMmiddleware::class)
    ->name('emojis');
route::get('/users/maruo225',[\App\Http\Controllers\WrapperController::class, 'user'])
    ->middleware(\App\Http\Middleware\NPMmiddleware::class)
    ->name('user');
route::get('/feeds',[\App\Http\Controllers\WrapperController::class, 'feed'])
    ->middleware(\App\Http\Middleware\NPMmiddleware::class)
    ->name('feed');
route::get('/events',[\App\Http\Controllers\WrapperController::class, 'event'])
    ->middleware(\App\Http\Middleware\NPMmiddleware::class)
    ->name('event');
Route::get('/user/identitas', function (){
    return [
        'code' => 0,
        'data' => [
            'npm'=>'197006042',
            'nama'=>'Firman Maulana',
            'email'=>'197006042@student.unsil.ac.id'
        ]
    ];
})
    ->middleware(\App\Http\Middleware\NPMmiddleware::class)
    ->name('identitas');
