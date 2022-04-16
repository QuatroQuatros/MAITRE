<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return Categoria::all();
    }

    public function show($id){
        $categoria = Categoria::findOrFail($id);
        return response($categoria, 200);
    }

    public function store(Request $request){
        $request->validate([
            "descCategoria" => 'required|string|unique:categorias',

        ]);

        $categoria = Categoria::create([
            "descCategoria" => $request->descCategoria

        ]);

        return response($categoria, 201);


    }

    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);

        $request->validate([
            "descCategoria" => 'required|string|unique:categorias',

        ]);


        $categoria->update([
            "descCategoria" => $request->descCategoria

        ]);

        return response($categoria, 202);
    }
}
