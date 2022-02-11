<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\EquipamentosController;

// Route::view('/', 'home');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::post('/produtos',[ProdutosController::class, 'index']);
Route::get('/equipamentos', [EquipamentosController::class, 'index']);
Route::post('/equipamentos', [EquipamentosController::class, 'store']);

Route::resource('/equipamento', 'EquipamentosController')->except([
    'show', 'edit'
]);

Route::get('/equipamento/delete/{equipamento}', function (App\Models\Equipamento $equipamento) {
    return view('equipamentos.destroy', ['eqp' => $equipamento]);
})->name('equipamento.delete');

Route::get('/equipamento/edit/{equipamento}', function (App\Models\Equipamento $equipamento) {
    return view('equipamentos.edit', ['eqp' => $equipamento]);
})->name('equipamento.edit');







