<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;
use App\Osa;
use App\Cargo;
use App\Estado;
use App\Cidade;
use App\Tipo_Usuario;

use DB;


class UsuarioComumController extends Controller
{
	function consultar(){
		return view ('CadastroUsuarioComum');
	}

	function cadastrar(Request $request){

		$usuario = new Usuario();
		

		$usuario -> NOME = $request -> input ('nome_cadastroComum');
		$usuario -> EMAIL = $request -> input ('email_cadastroComum');
		$usuario -> SENHA = $request -> input ('senha_cadastroComum');
		$usuario -> ID_CIDADE = $request -> input ('cidade');
		$usuario -> ID_TIPO_USUARIO = 1;
		$usuario -> ID_OSA = 1;
		$usuario -> CARGO = $request -> input ('cargo');

		$usuario -> save();
		
		return redirect()-> action('UsuarioComumController@consultar');
	}

	function carregaUser(){
		$cidade = Cidade::all();
		$estado = Estado::all();
		
	
		return view ('CadastroUsuarioComum',compact('cidade','estado'));
	
	}

}