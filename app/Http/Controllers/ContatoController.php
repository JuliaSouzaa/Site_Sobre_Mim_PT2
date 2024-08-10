<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function create()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        // Cria um novo contato com os dados do formulário
        $contato = new Contato();
        $contato->id = $request->id;
        $contato->nome = $request->nome;
        $contato->telefone = $request->telefone;
        $contato->email = $request->email;
        $contato->mtv_contato = $request->mtv_contato;
        $contato->mensagem = $request->mensagem;
        $contato->endereco = $request->endereco;
        $contato->sexo = $request->sexo;

        // Salva no banco de dados
        $contato->save();

        // Retorna a view contato com os dados inseridos
        return view('contato', ['contato' => $contato]);

        //retorna a mensagem ao poupup
        return redirect()->back()->with('success', 'Dados registrados com sucesso!');

    }
}

