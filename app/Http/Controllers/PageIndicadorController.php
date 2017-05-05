<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Indicador;
use App\Tema;
use App\Pop_Beneficiada;
use App\PageIndicador;
use App\Acao;
use App\Usuario;
use App\Responsavel_Acao;
use App\Prestacao_Acao;
use DB;

class PageIndicadorController extends Controller
{
    public function create()
    {
        $inputs = Input::all();
        $page = Page::create();
    }

    public function retorna_detalhada($indicador = 'ID_INDICADOR')
    {
        $page = pageIndicador::where('ID_INDICADOR', $indicador)->first();
        $tema = Tema::where('ID_TEMA', $page->ID_TEMA)->first();
        $procuratema = Tema::all();
        $pci = DB::table('prestacao_indicador')->join('indicador', 'indicador.ID_INDICADOR', '=', 'prestacao_indicador.ID_INDICADOR')->get(); 
		$pciporcentagem = DB::table('prestacao_indicador')->join('indicador', 'indicador.ID_INDICADOR', '=', 'prestacao_indicador.ID_INDICADOR')->orderBy('DATA_REFERENCIA', 'desc')->first();
        return view('indicadorDetalhada', compact('page', 'tema', 'procuratema', 'pci', 'pciporcentagem'));
    }

}