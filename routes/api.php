<?php

use App\Http\Controllers\CarrosController;
use App\Http\Requests\CarrosResquest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('carros/store',[CarrosController::class,'store']);
