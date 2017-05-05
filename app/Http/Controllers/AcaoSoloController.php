<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Acao;
use App\Meta;
use App\Tema;

class AcaoSoloController extends Controller
{

	function consultar(){
		$meta = Meta::all();
		$tema = Tema::all();
		return view('cadastroacaosolo', compact('meta', 'tema'));
	}

	function cadastrar(Request $request){
		$acao = new Acao();
		$acao -> DESCRICAO = $request -> input ('DESCRICAO');
		$acao -> ID_META = $request -> input ('ID_META');
		$acao -> DATA_INICIO = $request -> input ('DATA_INICIO');
		$acao -> DATA_FIM = $request -> input ('DATA_FIM');
		$acao -> INVESTIMENTO_PREVISTO = $request -> input ('INVESTIMENTO_PREVISTO');
		$acao -> INVESTIMENTO_EXECUTADO = $request -> input ('INVESTIMENTO_EXECUTADO');
		$acao -> RESPONSAVEIS = $request -> input ('RESPONSAVEIS');
		$acao -> save();

		$meta = Meta::all();
		return view('meusDadosNv2', compact('meta'));
	}
}