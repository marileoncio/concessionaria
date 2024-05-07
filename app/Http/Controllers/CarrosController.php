<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarrosResquest;
use App\Models\Carros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function store(CarrosResquest $request) {
            
        $carros = Carros::create([
            'modelo' => $request->modelo,
            'ano' => $request->ano,
            'marca' => $request->marca,
            'cor' => $request->cor,
            'potencia' => $request->potencia,
            'peso' => $request->peso,
            'descricao' => $request->descricao,
            'preco' => $request->preco
        ]);
        return response()->json([
            "success" => true,
            "message" => "Carro cadastrado com sucesso!!",
            "data" => $carros
        ], 200);
    }
    public function excluir($id)
    {
        $carros = Carros::find($id);

        if(!isset($carros)) {
            return response()->json([
                'status'=> false,
                'message'=> "Carro não encontrado :("
            ]);
        }
        $carros->delete();
        return response()->json([
            'status' => true,
            'message' => "Carro excluído com sucesso :)!"
        ]);
    }
}
