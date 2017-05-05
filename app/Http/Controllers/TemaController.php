<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tema;

class TemaController extends Controller
{
	function consultar(){
		$tema = Tema::all();
		return view ('temaRetorna', ['tema'=>$tema]);
	}

	function cadastrar(Request $request){
		$tema = new Tema();
		$tema -> NOME = $request -> input ('NOME');
		$tema -> SIGLA = $request -> input ('SIGLA');
		$tema -> save();
		return redirect()-> action('TemaController@consultar');
	}

	function atualizar(Request $request){
		$ID_TEMA = $request->input('ID_TEMA');
		$NOME = $request->input('NOME');
		$SIGLA = $request->input('SIGLA');

		Tema::where('ID_TEMA', '=', "$ID_TEMA") 
		->where ('ID_TEMA', $ID_TEMA)
		->update(['NOME' => $NOME, 'SIGLA' => $SIGLA]);


		return redirect()->action('TemaController@consultar');
	}
}