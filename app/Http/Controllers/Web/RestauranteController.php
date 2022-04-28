<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Restaurante;

class RestauranteController extends Controller
{
    public function index(){

    }

    public function dash(){
        
        return view('dashboards.restaurante.index', ['name' => auth()->user()->name]);
    }

    public function create(){
        return view('dashboards.restaurante.create');
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
    }
}
