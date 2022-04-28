<?php

namespace App\Http\Controllers\Api;

use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function index(){
        return Restaurante::all();
    }

    public function show($id){
        $restaurante = Restaurante::findOrFail($id);
        return response($restaurante, 200);
    }

    public function store(Request $request){
        $request->validate([
            "nome" => 'required|string',
            "endereco" => 'required|string',
            "numero" => 'required|integer',
            "bairro" => 'required|string',
            "cidade" => 'required|string',
            "estado" => 'required|string',
            "cep" => 'required|string',
            "categoria_id" => 'required|integer',
            "user_id" => 'required|integer'
        ]);

        $restaurante = Restaurante::create([
            "nome" => $request->nome,
            "foto" => $request->foto,
            "cardapio" => $request->cardapio,
            "endereco" => $request->endereco,
            "numero" => $request->numero,
            "bairro" => $request->bairro,
            "cidade" => $request->cidade,
            "estado" =>  $request->estado,
            "cep" =>  $request->cep,
            "categoria_id" => $request->categoria_id,
            "user_id" => $request->user_id
        ]);

        return response($restaurante, 201);


    }

    public function update(Request $request, $id){
        $restaurante = Restaurante::findOrFail($id);

        $request->validate([
            "nome" => 'required|string',
            "endereco" => 'required|string',
            "numero" => 'required|integer',
            "bairro" => 'required|string',
            "cidade" => 'required|string',
            "estado" => 'required|string',
            "cep" => 'required|string',
            "categoria_id" => 'required|integer',
            "user_id" => 'required|integer'
        ]);


        $restaurante->update([
            "nome" => $request->nome,
            "foto" => $request->foto,
            "cardapio" => $request->cardapio,
            "endereco" => $request->endereco,
            "numero" => $request->numero,
            "bairro" => $request->bairro,
            "cidade" => $request->cidade,
            "estado" =>  $request->estado,
            "cep" =>  $request->cep,
            "categoria_id" => $request->categoria_id,
            "user_id" => $request->user_id

        ]);

        return response($restaurante, 202);
    }
}
