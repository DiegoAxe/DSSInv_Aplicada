<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
| 
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ClienteController::class, 'index'])->name("cliente.index");
Route::post('/registrar', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/registrar', [ClienteController::class, 'create'])->name('cliente.create');

Route::patch('/modificar/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/modificar/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::delete('/eliminar/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::resource('clientes', ClienteController::class);

/*
URLS Recomendadas para utilizar en Postman:

Get: http://localhost:8000/api/
Post: http://localhost:8000/api/registrar
Patch: http://localhost:8000/api/modificar/22 
Delete: http://localhost:8000/api/eliminar/20

Todos los metodos redireccionan al index, si desea que se evite eso, ponga como comentario dichas lineas 
y podra ver los mensajes en echo
*/
