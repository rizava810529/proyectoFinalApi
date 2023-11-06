<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EnlaceController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonaController;





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('bitacoras', BitacoraController::class);
Route::delete('/bitacoras/{id}', 'BitacoraController@destroy');


/* Route::controller(BitacoraController::class)->group(function () {
    Route::get('/bitacoras', 'index');
    Route::get('/bitacora/{id}', 'show');
    Route::post('/bitacora', 'store');
    Route::put('/bitacora/{id}', 'update');
    Route::delete('/bitacora/{id}', 'destroy');
});
 */
/* Route::controller(RolController::class)->group(

    function () {
        Route::get('/roles', 'index');
        Route::get('/rol/{id}','show');
        Route::post('/rol/{id}', 'store');
        Route::put('/rol/{id}', 'update');
        Route::delete('/rol/{id}', 'destroy');
    }
); */
Route::resource('rol', RolController::class);
Route::delete('/rol/{id}', [RolController::class, 'destroy']);
/* Route::get('/roles', [RolController::class, 'index']);
Route::get('/rol/{id}', [RolController::class, 'show']);
Route::post('/rol', [RolController::class, 'store']);
Route::put('/rol/{id}', [RolController::class, 'update']); */

/* Route::controller(EnlaceController::class)->group(

    function () {
        Route::get('/enlaces', 'index');
        Route::get('enlace/{id}','show');
        Route::post('enlace/{id}', 'store');
        Route::put('enlace/{id}', 'update');
        Route::delete('/enlace/{id}', 'destroy');
    }
);
 */

Route::get('/enlaces', [EnlaceController::class, 'index']);
Route::get('/enlace/{id}', [EnlaceController::class, 'show']);
Route::post('/enlaces', [EnlaceController::class, 'store']);
Route::put('/enlace/{id}', [EnlaceController::class, 'update']);
Route::delete('/enlace/{id}', [EnlaceController::class, 'destroy']);




// Ruta para mostrar una lista de recursos (GET)
Route::get('/paginas', [PaginaController::class, 'index']);

// Ruta para mostrar un recurso específico (GET)
Route::get('/pagina/{id}', [PaginaController::class, 'show']);

// Ruta para crear un nuevo recurso (POST)
Route::post('/paginas', [PaginaController::class, 'store']);

// Ruta para actualizar un recurso específico (PUT)
Route::put('/pagina/{id}', [PaginaController::class, 'update']);

// Ruta para eliminar un recurso específico (DELETE)
Route::delete('/pagina/{id}', [PaginaController::class, 'destroy']);

/* Route::controller(PaginaController::class)->group(

    function () {
        Route::get('/paginas', 'index');
        Route::get('pagina/{id}','show');
        Route::post('pagina/{id}', 'store');
        Route::put('pagina/{id}', 'update');
        Route::delete('/pagina{id}', 'destroy');
    }
);
 */
Route::resource('usuarios', UsuarioController::class);
/* Route::delete('/api/usuarios/{id}', [UsuarioController::class, 'destroy']);
Route::put('/api/usuarios/{id}', [UsuarioController::class, 'update']); */
/* Route::controller(UsuarioController::class)->group(

    function () {
        Route::get('/usuarios', 'index');
        Route::get('usuario/{id}','show');
        Route::post('usuario/{id}', 'store');
        Route::put('usuario/{id}', 'update');
        Route::delete('/usuario{id}', 'destroy');
    }
);
 */
/* Route::controller(PersonaController::class)->group(

    function () {
        Route::get('/personas', 'index');
        Route::get('persona/{id}','show');
        Route::post('persona/{id}', 'store');
        Route::put('persona/{id}', 'update');
        Route::delete('/persona{id}', 'destroy');
    }
); */
Route::resource('personas', PersonaController::class);
Route::delete('/api/personas/{persona}', [PersonaController::class, 'destroy']);

