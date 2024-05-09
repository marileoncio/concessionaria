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
    public function update(Request $request)
    {
        $carros = Carros::find($request->id);

        if (!isset($carros)) {
            return response()->json([
                'status' => false,
                'message' => "Carro não encontrado! :("
            ]);
        }

        if (isset($request->modelo)) {
            $carros->modelo = $request->modelo;
        }
        if (isset($request->ano)) {
            $carros->ano = $request->ano;
        }
        if (isset($request->marca)) {
            $carros->marca = $request->marca;
        }
        if (isset($request->cor)) {
            $carros->cor = $request->cor;
        }
        if (isset($request->peso)) {
            $carros->peso = $request->peso;
        }
        if (isset($request->potencia)) {
            $carros->potencia = $request->potencia;
        }
        if (isset($request->descricao)) {
            $carros->descricao = $request->descricao;
        }
        if (isset($request->preco)) {
            $carros->preco = $request->preco;
        };
        

        $carros->update();

        return response()->json([
            'status' => true,
            'message' => "Carro Atualizado! :)"
        ]);
    }
    public function pesquisarPorModelo(Request $request)
    {
        $carros = Carros::where('modelo', 'like', '%' . $request->modelo . '%')->get();
        if (count($carros) > 0) {
            return response()->json([
                'status' => true,
                'data' => $carros
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Nenhum carro encontrado :(("
            ]);
        }
    }
    public function retornarTodos()
    {
        $carros = Carros::all();
        return response()->json([
            'status' => true,
            'data' => $carros
        ]);
    }
}
