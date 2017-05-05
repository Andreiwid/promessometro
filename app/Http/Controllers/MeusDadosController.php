<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meta;
use App\Pop_Beneficiada;
use App\Tema;
use DB;

class MeusDadosController extends Controller
{
	function consultarnv1(){

		session_start();
		$meta = DB::table('meta')->join('usuario_segue_meta','usuario_segue_meta.ID_META', '=', 'meta.ID_META')
		->where('usuario_segue_meta.ID_USUARIO' , $_SESSION['ID_USUARIO'])
		->get();
		return view('meusDadosNv1', ['meta'=>$meta]);


	}

	

	function consultarnv2(){

		session_start();
		$meta = DB::table('meta')->join('usuario_segue_meta','usuario_segue_meta.ID_META', '=', 'meta.ID_META')
		->where('usuario_segue_meta.ID_USUARIO' , $_SESSION['ID_USUARIO'])
		->get();
		return view ('meusDadosNv2', ['meta'=>$meta]);
	}

	// function cadastrar(Request $request){
	// 	$meta = new Meta();
	// 	$meta -> OBJETIVO = $request -> input ('OBJETIVO');
	// 	$meta -> RESUMO = $request -> input ('RESUMO');
	// 	$meta -> DESCRICAO = $request -> input ('DESCRICAO');
	// 	$meta -> ID_POP_BENEFICIADA = $request -> input ('ID_POP_BENEFICIADA');
	// 	$meta -> DATA_INICIO = $request -> input ('DATA_INICIO');
	// 	$meta -> DATA_FIM = $request -> input ('DATA_FIM');
	// 	$meta -> STATUS_META = $request -> input ('STATUS_META');
	// 	$meta -> ID_GESTAO = $request -> input ('ID_GESTAO');
	// 	$meta -> ID_TEMA = $request -> input ('ID_TEMA');
	// 	$meta -> save();
	// 	return redirect()-> action('MetaController@consultar');
	// }

	// function atualizar(Request $request){
	// 	$ID_META = $request->input('ID_META');
	// 	$OBJETIVO = $request->input('OBJETIVO');
	// 	$RESUMO = $request->input('RESUMO');
	// 	$DESCRICAO = $request->input('DESCRICAO');
	// 	$ID_POP_BENEFICIADA = $request->input('ID_POP_BENEFICIADA');
	// 	$DATA_INICIO = $request->input('DATA_INICIO');
	// 	$DATA_FIM = $request->input('DATA_FIM');
	// 	$STATUS_META = $request->input('STATUS_META');
	// 	$ID_GESTAO = $request->input('ID_GESTAO');
	// 	$ID_TEMA = $request->input('ID_TEMA');

	// 	Meta::where('ID_META', '=', "$ID_META") 
	// 	->where ('ID_META', $ID_META)
	// 	->update(['OBJETIVO' => $OBJETIVO, 'RESUMO' => $RESUMO, 'DESCRICAO' => $DESCRICAO, 'ID_POP_BENEFICIADA' => $ID_POP_BENEFICIADA, 'DATA_INICIO' => $DATA_INICIO, 'DATA_FIM' => $DATA_FIM, 'STATUS_META' => $STATUS_META, 'ID_GESTAO' => $ID_GESTAO, 'ID_TEMA' => $ID_TEMA]);

	// 	return redirect()->action('MetaController@consultar');
	// }

	// function carrega(){
	// 	$popbeneficiada = Pop_Beneficiada::all();
	// 	$tema = Tema::all();
	// 	return view ('MetaCadastra', ['popbeneficiada'=>$popbeneficiada], ['tema'=>$tema]);

	// }

	// function atualiza_especifica(Request $request){
	// 	$ID_META = $request->input('ID_META');
	// 	$meta = DB::table('meta')->where('ID_META', $ID_META)->get();		

	// 	return view ('metaRetorna', ['meta'=>$meta]);
	// }
}