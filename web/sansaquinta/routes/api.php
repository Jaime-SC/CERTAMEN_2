<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedidasController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("medidas/get", [MedidasController::class, "getMedidas"]);

Route::get("registrar_lecturas/get", [MedidasController::class, "getMedidas"]);

Route::get("medidas_existentes/post", [MedidasController::class, "crearMedida"]);
