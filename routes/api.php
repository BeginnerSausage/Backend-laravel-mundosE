<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::get('/contacto', [ApiController::class,'index']); //Mostrar todos los registros
// Route::group(['middleware' => ['cors']], function () {
// });

Route::post('/contacto', [ApiController::class,'store']); //Crear un registro

// Route::put('/contacto/{id}', [ApiController::class,'update']); //Actualizar un registro

// Route::delete('/contacto{id}', [ApiController::class,'destroy']); //Eliminar un registro
