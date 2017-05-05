<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Equipe_Governo;

class EquipeGovernoController extends Controller
{
	function consultar(){
		$equipe_governo = Equipe_Governo::all();
		return view ('equipeGovernoRetorna', ['equipe_governo'=>$equipe_governo]);
	}

	function cadastrar(Request $request){
		$equipe_governo = new Equipe_Governo();
		$equipe_governo -> ID_GESTAO = $request -> input ('ID_GESTAO');
		$equipe_governo -> ID_MEMBRO = $request -> input ('ID_MEMBRO');
		$equipe_governo -> save();
		return redirect()-> action('EquipeGovernoController@consultar');
	}

	function atualizar(Request $request){
		$ID_EQUIPE_GOVERNO = $request->input('ID_EQUIPE_GOVERNO');
		$ID_GESTAO = $request->input('ID_GESTAO');
		$ID_MEMBRO = $request->input('ID_MEMBRO');

		Equipe_Governo::where('ID_EQUIPE_GOVERNO', '=', $ID_EQUIPE_GOVERNO) 
		->where ('ID_EQUIPE_GOVERNO', $ID_EQUIPE_GOVERNO)
		->update(['ID_MEMBRO' => $ID_MEMBRO, 'ID_GESTAO' => $ID_GESTAO]);

		return redirect()->action('EquipeGovernoController@consultar');
	}
}