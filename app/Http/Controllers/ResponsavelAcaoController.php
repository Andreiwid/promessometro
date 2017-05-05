<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Responsavel_Acao;

class ResponsavelAcaoController extends Controller
{
	function consultar(){
		$responsavel_acao = Responsavel_Acao::all();
		return view ('prestaAcaoRetorna', ['responsavel_acao'=>$responsavel_acao]);
	}
}