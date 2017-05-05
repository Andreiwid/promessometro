<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prestacao_Indicador;

class PrestacaoIndicadorController extends Controller
{
	function consultar(){
		$prestacao_indicador = Prestacao_Indicador::all();
		return view ('prestacaoIndicadorRetorna', ['prestacao_indicador'=>$prestacao_indicador]);
	}

	function cadastrar(Request $request){
		$prestacao_indicador = new Prestacao_Indicador();
		$prestacao_indicador -> ID_INDICADOR = $request -> input ('ID_INDICADOR');
		$prestacao_indicador -> ID_RESPONSAVEL_INDICADOR = $request -> input ('ID_RESPONSAVEL_INDICADOR');
		$prestacao_indicador -> DATA_REFERENCIA = $request -> input ('DATA_REFERENCIA');
		$prestacao_indicador -> VALOR = $request -> input ('VALOR');
		$prestacao_indicador -> CONSIDERACAO = $request -> input ('CONSIDERACAO');
		$prestacao_indicador -> PERCENTUAL_INDICADOR = $request -> input ('PERCENTUAL_INDICADOR');
		$prestacao_indicador -> save();
		return redirect()-> action('PrestacaoIndicadorController@consultar');
	}

	function atualizar(Request $request){
		$ID_PRESTACAO_INDICADOR = $request->input('ID_PRESTACAO_INDICADOR');
		$ID_INDICADOR = $request->input('ID_INDICADOR');
		$ID_RESPONSAVEL_INDICADOR = $request->input('ID_RESPONSAVEL_INDICADOR');
		$DATA_REFERENCIA = $request->input('DATA_REFERENCIA');
		$VALOR = $request->input('VALOR');
		$CONSIDERACAO = $request->input('CONSIDERACAO');
		$PERCENTUAL_INDICADOR = $request->input('PERCENTUAL_INDICADOR');

		Prestacao_Indicador::where('ID_PRESTACAO_INDICADOR', '=', $ID_PRESTACAO_INDICADOR) 
		->where ('ID_PRESTACAO_INDICADOR', $ID_PRESTACAO_INDICADOR)
		->update(['ID_INDICADOR' => $ID_INDICADOR, 'ID_RESPONSAVEL_INDICADOR' => $ID_RESPONSAVEL_INDICADOR, 'DATA_REFERENCIA' => $DATA_REFERENCIA, 'VALOR' => $VALOR, 'CONSIDERACAO' => $CONSIDERACAO, 'PERCENTUAL_INDICADOR' => $PERCENTUAL_INDICADOR]);

		return redirect()->action('PrestacaoIndicadorController@consultar');
	}
}