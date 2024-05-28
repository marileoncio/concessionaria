<?php

use App\Http\Controllers\CarrosController;
use App\Http\Requests\CarrosResquest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('carros/store',[CarrosController::class,'store']);

Route::delete('carros/excluir/{id}',[CarrosController::class,'excluir']);

Route::put('carros/update', [CarrosController::class, 'update']);

Route::get('carros/find/{modelo}', [CarrosController::class, 'pesquisarPorModelo']);

Route::get('carros/all', [CarrosController::class, 'retornarTodos']);

