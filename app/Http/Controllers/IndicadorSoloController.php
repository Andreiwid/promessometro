<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PageIndicador;
use App\Gestao;
use App\Tema;
use App\Meta;
use App\Cidade;

class IndicadorSoloController extends Controller
{

	function consultar(){
		$gestao = Gestao::all();
		$tema = Tema::all();
		$cidade = Cidade::all();
		
		return view('cadastroindicadorsolo', compact('gestao', 'tema', 'cidade'));
	}

	function cadastrar(Request $request){
		$indicador = new PageIndicador();
		$indicador -> ID_GESTAO = $request -> input ('ID_GESTAO');
		$indicador -> NOME = $request -> input ('NOME');
		$indicador -> DESCRICAO = $request -> input ('DESCRICAO');
		$indicador -> PROTOCOLO = $request -> input ('PROTOCOLO');
		$indicador -> FONTE = $request -> input ('FONTE');
		$indicador -> UND_MEDIDA = $request -> input ('UND_MEDIDA');
		$indicador -> VALOR_META = $request -> input ('VALOR_META');
		$indicador -> ID_TEMA = $request -> input ('ID_TEMA');
		$indicador -> ID_CIDADE = $request -> input ('ID_CIDADE');
		$indicador -> save();

		$meta = Meta::all();
		return view ('meusDadosNv2', ['meta'=>$meta]);
	}
}