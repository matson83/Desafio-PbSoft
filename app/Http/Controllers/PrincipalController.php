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

    public function show($id){
        $cadastro = Cadastro::findOrFail($id);

        return view('desafio.show',['cadastro' => $cadastro]);
    }

    public function store(Request $request){

        $cadastro = new Cadastro;

        $cadastro->name = $request->name;
        $cadastro->data = $request->data;
        $cadastro->cpf_cnpj = $request->cpf_cnpj;
        $cadastro->name_social = $request->name_social;


        if($request->hasFile('image') ** $request->file('image')->isValid()){

            $requestImage = $request->image;

            $complemento = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() .strtotime("agora")) . "." . $complemento;

            $requestImage->move(public_path('img/cadastro') ,$imageName);

            $cadastro->image = $imageName;

        }

        $cadastro->save();

         return redirect('/');
    }

    public function destroy($id){

        Cadastro::findOrFail($id)->delete();

        return redirect('/');
    }

    public function edit($id){

       $cadastro = Cadastro::findOrFail($id);

        return view('desafio.edit',['cadastro'=>$cadastro]);
    }

    public function update(Request $request){

        $cadastro = Cadastro::findOrFail($request->id)->update($request->all());


        return redirect('/');
     }

}
