<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){

        $nome = 'PedrinKoreaDie';
        $sobreNome = 'Korea';
        $data = '24/11/1998';
        $idade = 20;

        $dados = [
            'nome' => $nome,
            'sobreNome' => $sobreNome,
            'data' => $data,
            'idade' => $idade
        ];

        return view('welcome', $dados);
    }

    public function goBack(){
        return view('goback');
    }


    public function users(Request $request) {
        $UrlParametro =[
            'id' => $request -> id
        ];

        return view('usuarios', $UrlParametro);
    }
}
