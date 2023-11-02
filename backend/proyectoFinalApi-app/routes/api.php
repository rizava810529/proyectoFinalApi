<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EnlaceController;





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(BitacoraController::class)->group(function () {
    Route::get('/bitacoras', 'index');
    Route::get('/bitacora/{id}', 'show');
    Route::post('/bitacora', 'store');
    Route::put('/bitacora/{id}', 'update');
    Route::delete('/bitacora/{id}', 'destroy');
});

Route::controller(RolController::class)->group(

    function () {
        Route::get('/roles', 'index');
        Route::get('/rol/{id}','show');
        Route::post('/rol/{id}', 'store');
        Route::put('/rol/{id}', 'update');
        Route::delete('/rol/{id}', 'destroy');
    }
);

Route::controller(EnlaceController::class)->group(

    function () {
        Route::get('/enlaces', 'index');
        Route::get('enlace/{id}','show');
        Route::post('enlace/{id}', 'store');
        Route::put('enlace/{id}', 'update');
        Route::delete('/usuario/{id}', 'destroy');
    }
);
