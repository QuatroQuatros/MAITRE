<?php


namespace App\Repositories;
use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\Model;

use App\Models\Restaurante;
use Illuminate\Support\Facades\DB;


class RestauranteRepository{

    public function __construct(Restaurante $restaurante){
        $this->restaurante = $restaurante;
    }
    public function index(){
        return $this->restaurante->join('avaliacoes', 'restaurantes.id', 'avaliacoes.restaurante_id')
        ->select('restaurantes.id', 'restaurantes.nome', 'restaurantes.foto', DB::raw( 'AVG( avaliacoes.estrelas ) as estrelas' ))
        ->groupBy('restaurantes.id', 'restaurantes.nome', 'restaurantes.foto')->get();

    }

    public function show($id){
        return $this->restaurante->findOrFail($id);
    }

    public function store(Request $request){
        $request->validate($this->restaurante->rules(), $this->restaurante->feedback());

        $imagem = $request->file('foto');
        $name = $imagem->getClientOriginalName(); 
        $imagem_urn = $imagem->storeAs('imagens', $name, 'public');

        return $this->restaurante->create([
            "nome" => $request->nome,
            "cardapio" => $request->cardapio,
            "endereco" => $request->endereco,
            "numero" => $request->numero,
            "bairro" => $request->bairro,
            "cidade" => $request->cidade,
            "estado" =>  $request->estado,
            "foto" => $imagem_urn,
            "cep" =>  $request->cep,
            "categoria_id" => $request->categoria_id,
            "user_id" => $request->user_id
        ]);

    }

    public function update(Request $request, $id){
        $this->restaurante = $this->restaurante->findOrFail($id);
        $request->validate($this->restaurante->rules(), $this->restaurante->feedback());

        $imagem = $request->file('foto');
        $name = $imagem->getClientOriginalName(); 
        $imagem_urn = $imagem->storeAs('imagens', $name, 'public');

        $this->restaurante->update([
            "nome" => $request->nome,
            "foto" => $imagem_urn,
            "cardapio" => $request->cardapio,
            "endereco" => $request->endereco,
            "numero" => $request->numero,
            "bairro" => $request->bairro,
            "cidade" => $request->cidade,
            "estado" =>  $request->estado,
            "cep" =>  $request->cep,
            "categoria_id" => $request->categoria_id,
        ]);

        return $this->restaurante;


    }



}