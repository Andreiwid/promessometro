<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\GestaoSolo;
use App\Cidade;
use App\Meta;

class GestaoSoloController extends Controller
{

	function consultar(){
		$cidade = Cidade::all();
		return view('cadastrogestaosolo', ['cidade'=>$cidade]);
	}

	function cadastrar(Request $request){
		$gestaosolo = new GestaoSolo();
		$gestaosolo -> DATA_INICIO = $request -> input ('DATA_INICIO');
		$gestaosolo -> DATA_FIM = $request -> input ('DATA_FIM');
		$gestaosolo -> PROMESSA_CAMPANHA = $request -> input ('PROMESSA_CAMPANHA');
		$gestaosolo -> ID_CIDADE = $request -> input ('ID_CIDADE');
		$gestaosolo -> save();

		$meta = Meta::all();
		return view ('meusDadosNv2', ['meta'=>$meta]);
	}
}