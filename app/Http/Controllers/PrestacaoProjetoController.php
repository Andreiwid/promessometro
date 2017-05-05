<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prestacao_Projeto;

class PrestacaoProjetoController extends Controller
{
	function consultar(){
		$prestacao_projeto = Prestacao_Projeto::all();
		return view ('prestacaoProjetoRetorna', ['prestacao_projeto'=>$prestacao_projeto]);
	}

	function cadastrar(Request $request){
		$prestacao_projeto = new Prestacao_Projeto();
		$prestacao_projeto -> ID_PROJETO = $request -> input ('ID_PROJETO');
		$prestacao_projeto -> ID_RESPONSAVEL_PROJETO = $request -> input ('ID_RESPONSAVEL_PROJETO');
		$prestacao_projeto -> DATA_REFERENCIA = $request -> input ('DATA_REFERENCIA');
		$prestacao_projeto -> PERCENTUAL_PROJETO = $request -> input ('PERCENTUAL_PROJETO');
		$prestacao_projeto -> save();
		return redirect()-> action('PrestacaoProjetoController@consultar');
	}

	function atualizar(Request $request){
		$ID_PRESTACAO_PROJETO = $request->input('ID_PRESTACAO_PROJETO');
		$ID_PROJETO = $request->input('ID_PROJETO');
		$ID_RESPONSAVEL_PROJETO = $request->input('ID_RESPONSAVEL_PROJETO');
		$DATA_REFERENCIA = $request->input('DATA_REFERENCIA');
		$PERCENTUAL_PROJETO = $request->input('PERCENTUAL_PROJETO');

		Prestacao_Projeto::where('ID_PRESTACAO_PROJETO', '=', $ID_PRESTACAO_PROJETO) 
		->where ('ID_PRESTACAO_PROJETO', $ID_PRESTACAO_PROJETO)
		->update(['ID_PROJETO' => $ID_PROJETO, 'ID_RESPONSAVEL_PROJETO' => $ID_RESPONSAVEL_PROJETO, 'DATA_REFERENCIA' => $DATA_REFERENCIA, 'PERCENTUAL_PROJETO' => $PERCENTUAL_PROJETO]);

		return redirect()->action('PrestacaoProjetoController@consultar');
	}
}