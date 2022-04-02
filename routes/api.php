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

Route::get('/kota/cari/', [\App\Http\Controllers\WrapperApiController::class, 'cari'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('cari');
Route::get('/kota/id/', [\App\Http\Controllers\WrapperApiController::class, 'id'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('id');
Route::get('/kota/semua/', [\App\Http\Controllers\WrapperApiController::class, 'semua'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('semua');
Route::get('/jadwal/2021/06/23/', [\App\Http\Controllers\WrapperApiController::class, 'hari'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('hari');
Route::get('/jadwal/2021/04/', [\App\Http\Controllers\WrapperApiController::class, 'bulan'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('bulan');

Route::get('/user/identitas', function () {
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006028',
            'nama' => 'Aris Aditya Nugroho',
            'email' => '197006028@student.unsil.ac.id'
        ]
    ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');