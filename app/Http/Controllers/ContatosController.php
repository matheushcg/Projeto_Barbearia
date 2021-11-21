<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatosController extends Controller
{
    public function create()
    {
        return view('contato.index');
    }

    public function store(Request $request)
    {
        Contato::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'mensagem' => $request->mensagem
        ]);
    
        return "Contato armazenado com sucesso!";
    }
}

