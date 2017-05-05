<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Responsavel_Indicador;

class ResponsavelIndicadorController extends Controller
{
	function consultar(){
		$responsavel_indicador = Responsavel_Indicador::all();
		return view ('responsavelIndicadorRetorna', ['responsavel_indicador'=>$responsavel_indicador]);
	}

	function cadastrar(Request $request){
		$responsavel_indicador = new Responsavel_Indicador();
		$responsavel_indicador -> ID_USUARIO = $request -> input ('ID_USUARIO');
		$responsavel_indicador -> ID_INDICADOR = $request -> input ('ID_INDICADOR');
		$responsavel_indicador -> save();
		return redirect()-> action('ResponsavelIndicadorController@consultar');
	}

	function atualizar(Request $request){
		$ID_RESPONSAVEL_INDICADOR = $request->input('ID_RESPONSAVEL_INDICADOR');
		$ID_USUARIO = $request->input('ID_USUARIO');
		$ID_INDICADOR = $request->input('ID_INDICADOR');

		Responsavel_Indicador::where('ID_RESPONSAVEL_INDICADOR', '=', $ID_RESPONSAVEL_INDICADOR) 
		->where ('ID_RESPONSAVEL_INDICADOR', $ID_RESPONSAVEL_INDICADOR)
		->update(['ID_USUARIO' => $ID_USUARIO, 'ID_INDICADOR' => $ID_INDICADOR]);

		return redirect()->action('ResponsavelIndicadorController@consultar');
	}
}