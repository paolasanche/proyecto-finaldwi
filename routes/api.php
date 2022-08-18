<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesApiController;

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


Route::get('/get_clientes01', [ClientesApiController::class, 'get_clientes01']);
Route::get('/get_clientes02', [ClientesApiController::class, 'get_clientes02']);
Route::get('/get_clientes03', [ClientesApiController::class, 'get_clientes03']);

Route::get('/get_clientes07', [ClientesApiController::class, 'get_clientes07']);

Route::get('/get_clientes04/{id}', [ClientesApiController::class, 'get_clientes04']);
Route::get('/get_clientes05/{id}', [ClientesApiController::class, 'get_clientes05']);
Route::get('/get_clientes06/{id}', [ClientesApiController::class, 'get_clientes06']);

Route::post('/post_clientes01', [ClientesApiController::class, 'post_clientes01']);

Route::put('/put_clientes01/{id}', [ClientesApiController::class, 'put_clientes01']);

Route::delete('/del_clientes01/{id}', [ClientesApiController::class, 'del_clientes01']);








