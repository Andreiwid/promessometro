<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prestacao_Acao;
use App\Acao;
use App\Meta;
use App\Tema;

class PrestAcaoSoloController extends Controller
{

	function consultar(){
		$acao = Acao::all();
		$tema = Tema::all();
		return view('cadastroprestacaosolo', compact('acao', 'tema'));
	}

	function cadastrar(Request $request){
		session_start();

		$prestacao = new Prestacao_Acao();
		$prestacao -> ID_USUARIO = $_SESSION['ID_USUARIO'];
		$prestacao -> ID_ACAO = $request -> input ('ID_ACAO');
		$prestacao -> DATA_REFERENCIA = $request -> input ('DATA_REFERENCIA');
		$prestacao -> PERCENTUAL_ACAO = $request -> input ('PERCENTUAL_ACAO');
		$prestacao -> CONSIDERACAO = $request -> input ('CONSIDERACAO');
		$prestacao -> save();

		$meta = Meta::all();
		return view('meusDadosNv2', compact('meta'));
	}
}