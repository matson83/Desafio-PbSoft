<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class PrincipalController extends Controller
{
    //
    public function index(){

        $cadastros = Cadastro::all();

        return view('welcome',['cadastros' => $cadastros]);

    }

    public function create(){
        return view('desafio.create');
    }

    public function edit(){
        return view('desafio.edit');
    }

    public function store(Request $request){

        $cadastro = new Cadastro;

        $cadastro->name = $request->name;
        $cadastro->data = $request->data;
        $cadastro->cpf_cnpj = $request->cpf_cnpj;
        $cadastro->name_social = $request->name_social;
        $cadastro->image = $request->image;

        $cadastro->save();

         return redirect('/');
    }
}
