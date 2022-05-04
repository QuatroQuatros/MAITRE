<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurante;

class ClienteController extends Controller
{
    public function index(){
        $restaurantes = Restaurante::all();
        return view('welcome', ['restaurantes' => $restaurantes]);
    }
}
