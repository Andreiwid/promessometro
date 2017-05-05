<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;
use App\Osa;
use App\Cargo;
use App\Estado;
use App\Cidade;
use App\Tipo_Usuario;
use App\Partido;
use App\Tema;
use App\Pop_Beneficiada;
use App\Indicador;
use App\Gestao;
use App\Meta;
use App\Acao;
use App\Membro;
use App\Coligacao;
use App\Equipe_Governo;
use DB;


class StepLineController extends Controller
{
	function consultar(){
		return view ('cadastro5');
	}

	function cadastrar(Request $request){
		$usuario = new Usuario();
		$cidade = new Cidade();
		$gestao = new Gestao();
		$meta = new Meta();
		$acao = new Acao();
		$membro = new Membro();
		$vice = new Membro();
		$vereador = new Membro();
		$indicador = new Indicador();
		$equipe_governopref = new Equipe_Governo();
		$equipe_governovice = new Equipe_Governo();
		$equipe_governovere = new Equipe_Governo();

		$usuario -> NOME = $request -> input ('nome');
		$usuario -> EMAIL = $request -> input ('email');
		$usuario -> SENHA = $request -> input ('senha');
		$usuario -> ID_CIDADE = $request -> input ('cidades_cadastro');
		$usuario -> ID_TIPO_USUARIO = 2;
		$usuario -> ID_OSA = $request -> input ('osa');
		$usuario -> CARGO = $request -> input ('cargo');

		$ID_CIDADE = $request -> input('cidades_cadastro');
		$AREA_CIDADE = $request -> input('areak2');
		$POP_CIDADE = $request -> input('num_habitantes');
		$END_PORTAL_CIDADE = $request -> input('portal_cidade');
		Cidade::where('ID_CIDADE', '=', $ID_CIDADE)
		->update(['AREAK2' => $AREA_CIDADE, 'POPULACAO' => $POP_CIDADE, 'END_PORTAL' => $END_PORTAL_CIDADE]);

		
		$gestao -> DATA_INICIO = $request -> input('DATA_INICIO');
		$gestao -> DATA_FIM = $request -> input('DATA_FIM');
		$gestao -> ID_CIDADE = $request -> input('cidades_cadastro');
		$gestao -> save();
		
		$tempmeta = DB::table('gestao') -> orderBy('ID_GESTAO','desc')->first();
		$meta -> DESCRICAO = $request -> input('descricao_meta');
		$meta -> ID_POP_BENEFICIADA = $request -> input('pop_beneficiada');
		$meta -> DATA_INICIO = $request -> input('data_inicio_meta');
		$meta -> DATA_FIM = $request -> input('data_fim_meta');
		$meta -> ID_GESTAO = $tempmeta -> ID_GESTAO;
		$meta -> ID_TEMA = $request -> input('tema');
		$meta -> ID_CIDADE = $request -> input('cidades_cadastro');
		$meta -> save();

		$membro -> NOME = $request -> input ('nome_prefeito');
		$membro -> ID_CARGO_MEMBRO = 1;
		$membro -> ID_PARTIDO = $request -> input ('partido_prefeito');
		$membro -> save();

		$tempmembro = DB::table('membro') -> orderBy('ID_MEMBRO', 'desc')->first();
		$equipe_governopref -> ID_GESTAO = $tempmeta -> ID_GESTAO;
		$equipe_governopref -> ID_MEMBRO = $tempmembro -> ID_MEMBRO;
		$equipe_governopref -> save();

		$vice -> NOME = $request -> input ('nome_vice');
		$vice -> ID_CARGO_MEMBRO = 2;
		$vice -> ID_PARTIDO = $request -> input ('partido_vice');
		$vice -> save();

		$tempmembro = DB::table('membro') -> orderBy('ID_MEMBRO', 'desc')->first();
		$equipe_governovice -> ID_GESTAO = $tempmeta -> ID_GESTAO;
		$equipe_governovice -> ID_MEMBRO = $tempmembro -> ID_MEMBRO;
		$equipe_governovice -> save();

		$vereador -> NOME = $request -> input('nome_vereador');
		$vereador -> ID_CARGO_MEMBRO = 3;
		$vereador -> ID_PARTIDO = $request -> input ('partido_vereador');
		$vereador -> save();

		$tempmembro = DB::table('membro') -> orderBy('ID_MEMBRO', 'desc')->first();
		$equipe_governovere -> ID_GESTAO = $tempmeta -> ID_GESTAO;
		$equipe_governovere -> ID_MEMBRO = $tempmembro -> ID_MEMBRO;
		$equipe_governovere -> save();

		$tempacao = DB::table('meta') -> orderBy('ID_META', 'desc')->first();
		$acao -> DESCRICAO = $request -> input('descricao_acao');
		$acao -> DATA_INICIO = $request -> input('data_inicio_acao');
		$acao -> DATA_FIM = $request -> input('data_fim_acao');
		$acao -> INVESTIMENTO_PREVISTO = $request -> input('investimento_previsto');
		$acao -> INVESTIMENTO_EXECUTADO = $request -> input('investimento_executado');
		$acao -> ID_META = $tempacao -> ID_META;

		$indicador -> ID_GESTAO = $tempmeta -> ID_GESTAO;
		$indicador -> NOME = $request -> input('nome_indicador');
		$indicador -> DESCRICAO = $request -> input('descricao_indicador');
		$indicador -> PROTOCOLO = $request -> input('protocolo_indicador');
		$indicador -> FONTE = $request -> input('fonte_indicador');
		$indicador -> UND_MEDIDA = $request -> input('und_medida1');
		$indicador -> VALOR_META = $request -> input('valor_meta');
		$indicador -> ID_TEMA = $request -> input('tema');
		$indicador -> ID_CIDADE = $request -> input('cidades_cadastro');


	
		
		$usuario -> save();
		$acao -> save();
		$indicador -> save();

	

		return redirect()-> action('StepLineController@consultar');
	}

	function carregaUser(){
		$cidade = Cidade::all();
		$tipo_usuario = Tipo_Usuario::all();
		$osa = Osa::all();
		$cargo = Cargo::all();
		$estado = Estado::all();
		$partido = Partido::all();
		$tema = Tema::all();
		$pop_beneficiada = Pop_Beneficiada::all();
		$indicador = Indicador::all();
		$gestao = Gestao::all();
	
		return view ('cadastro',compact('cidade','tipo_usuario','osa','cargo','estado','partido','tema','pop_beneficiada','indicador','gestao'));
	
	}

}