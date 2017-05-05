<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;

class UsuarioController extends Controller
{
	function consultar(){
		$usuario = Usuario::all();
		return view ('prestaAcaoRetorna', ['usuario'=>$usuario]);
	}
}