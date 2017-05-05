<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Acao;

class AcaoController extends Controller
{
	function consultar(){
		$acao = Acao::all();
		return view ('prestaAcaoRetorna', ['acao'=>$acao]);
	}

	function cadastrar(Request $request){
		$acao = new Acao();
		$acao -> DESCRICAO = $request -> input ('DESCRICAO');
		$acao -> ID_META = $request -> input ('ID_META');
		$acao -> DATA_INICIO = $request -> input ('DATA_INICIO');
		$acao -> DATA_FIM = $request -> input ('DATA_FIM');
		$acao -> INVESTIMENTO_PREVISTO = $request -> input ('INVESTIMENTO_PREVISTO');
		$acao -> INVESTIMENTO_EXECUTADO = $request -> input ('INVESTIMENTO_EXECUTADO');
		$acao -> save();
		return redirect()-> action('AcaoController@consultar');
	}

	// function atualizar(Request $request){
	// 	$DESCRICAO = $request->input('DESCRICAO');
	// 	$ID_META = $request->input('ID_META');
	// 	$DATA_INICIO = $request->input('DATA_INICIO');
	// 	$DATA_FIM = $request->input('DATA_FIM');
	// 	$INVESTIMENTO_PREVISTO = $request->input('INVESTIMENTO_PREVISTO');
	// 	$INVESTIMENTO_EXECUTADO = $request->input('INVESTIMENTO_EXECUTADO');

	// 	Acao::where('ID_TEMA', '=', "$ID_TEMA") 
	// 	->where ('ID_TEMA', $ID_TEMA)
	// 	->update(['NOME' => $NOME, 'SIGLA' => $SIGLA]);

	// 	return redirect()->action('AcaoController@consultar');
	// }
}