<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pop_Beneficiada;

class PopBeneficiadaController extends Controller
{
	function consultar(){
		$popbeneficiada = Pop_Beneficiada::all();
		return view ('popBeneficiadaRetorna', ['popbeneficiada'=>$popbeneficiada]);
	}

	function cadastrar(Request $request){
		$popbeneficiada = new Pop_Beneficiada();
		$popbeneficiada -> TITULO = $request -> input ('TITULO');
		$popbeneficiada -> DESCRICAO = $request -> input ('DESCRICAO');
		$popbeneficiada -> save();
		return redirect()-> action('PopBeneficiadaController@consultar');
	}

	function atualizar(Request $request){
		$ID_POP_BENEFICIADA = $request->input('ID_POP_BENEFICIADA');
		$TITULO = $request->input('TITULO');
		$DESCRICAO = $request->input('DESCRICAO');

		Pop_Beneficiada::where('ID_POP_BENEFICIADA', '=', "$ID_POP_BENEFICIADA") 
		->where ('ID_POP_BENEFICIADA', $ID_POP_BENEFICIADA)
		->update(['TITULO' => $TITULO, 'DESCRICAO' => $DESCRICAO]);


		return redirect()->action('PopBeneficiadaController@consultar');
	}
}