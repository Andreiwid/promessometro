<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prestacao_Conta_Acao;

class PrestaAcaoController extends Controller
{
	function consultar(){
		$prestaacao = Prestacao_Conta_Acao::all();
		return view ('prestaAcaoRetorna', ['prestaacao'=>$prestaacao]);
	}

	function cadastrar(Request $request){
		$prestaacao = new Prestacao_Conta_Acao();
		$prestaacao -> ID_RESPONSAVEL_ACAO = $request -> input ('ID_RESPONSAVEL_ACAO');
		$prestaacao -> ID_ACAO = $request -> input ('ID_ACAO');
		$prestaacao -> PERCENTUAL_ACAO = $request -> input ('PERCENTUAL_ACAO');
		$prestaacao -> CONSIDERACAO = $request -> input ('CONSIDERACAO');
		$prestaacao -> save();
		return redirect()-> action('PrestaAcaoController@consultar');
	}

	function atualizar(Request $request){
		$ID_PRESTA_CONTA_ACAO = $request->input('ID_PRESTA_CONTA_ACAO');
		$ID_RESPONSAVEL_ACAO = $request->input('ID_RESPONSAVEL_ACAO');
		$ID_ACAO = $request->input('ID_ACAO');
		$PERCENTUAL_ACAO = $request->input('PERCENTUAL_ACAO');
		$CONSIDERACAO = $request->input('CONSIDERACAO');

		Prestacao_Conta_Acao::where('ID_PRESTA_CONTA_ACAO', '=', $ID_PRESTA_CONTA_ACAO) 
		->where ('ID_PRESTA_CONTA_ACAO', $ID_PRESTA_CONTA_ACAO)
		->update(['ID_RESPONSAVEL_ACAO' => $ID_RESPONSAVEL_ACAO, 'ID_ACAO' => $ID_ACAO, 'PERCENTUAL_ACAO' => $PERCENTUAL_ACAO, 'CONSIDERACAO' => $CONSIDERACAO]);


		return redirect()->action('PrestaAcaoController@consultar');
	}
}