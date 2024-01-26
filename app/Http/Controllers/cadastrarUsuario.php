<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero ultilizar

class cadastrarUsuario extends Controller
{
    
    public function index(){
        $dados = cadastrarUsuarioModel::all();


        return view('paginas.cadastrar')->With('dados', $dados);
    }//fim do metodo index

    public function store(Request $request){
        $nomeUsuario = $request->input('nome');//coletrando os dados do formulario
        $telefoneUsuario = $request->input('telefone');

        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->telefone = $telefoneUsuario;
        $model->save();//armazenar os dados no bd

        return redirect('/cadastrar');
    }//fim do metodo store
}//fim da classe
