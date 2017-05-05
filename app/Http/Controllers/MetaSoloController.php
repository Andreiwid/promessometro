<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meta;
use App\Pop_Beneficiada;
use App\Tema;
use App\Gestao;
use App\Cidade;

class MetaSoloController extends Controller
{

	function consultar(){
		$pop_beneficiada = Pop_Beneficiada::all();
		$gestao = Gestao::all();
		$tema = Tema::all();
		$cidade = Cidade::all();

		return view('cadastrometasolo', compact('pop_beneficiada', 'gestao', 'tema', 'cidade'));
	}

	function cadastrar(Request $request){
		$meta = new Meta();
		$meta -> DESCRICAO = $request -> input ('DESCRICAO');
		$meta -> ID_POP_BENEFICIADA = $request -> input ('ID_POP_BENEFICIADA');
		$meta -> DATA_INICIO = $request -> input ('DATA_INICIO');
		$meta -> DATA_FIM = $request -> input ('DATA_FIM');
		$meta -> ID_GESTAO = $request -> input ('ID_GESTAO');
		$meta -> ID_TEMA = $request -> input ('ID_TEMA');
		$meta -> ID_CIDADE = $request -> input ('ID_CIDADE');
		$meta -> STATUS_META = 1;
		$meta -> save();

		$meta = Meta::all();
		return view ('meusDadosNv2', ['meta'=>$meta]);
	}
}