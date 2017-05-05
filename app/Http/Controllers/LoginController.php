<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Login;
use App\Usuario;


class LoginController extends Controller
{
	function logar(){

		$dados = array(
			'email' => $_POST['email_validacao'],
			'senha' => $_POST['senha_validacao']
		);

		$login = Login::all();

		echo $login;

	}

	


	
}