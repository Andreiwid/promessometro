<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meta;
use App\PageIndicador;
use App\Tema;
use App\Gestao;
use App\Cidade;
use App\Acao;
use App\Prestacao_Acao;
use App\Indicador;
use App\Prestacao_Indicador;
use DB;

class PageTemaMetaIndicadorController extends Controller
{

    public function retorna_detalhada($tema = 'ID_TEMA', $cidade = 'ID_CIDADE')
    {
        $tema = tema::where('ID_TEMA', $tema)->first();
        $cidade = cidade::where('ID_CIDADE', $cidade)->first();
        $meta = DB::table('meta')
            ->where('meta.ID_CIDADE', $cidade->ID_CIDADE)
            ->where('meta.ID_TEMA', $tema->ID_TEMA)
            ->get();
        $acao = Acao::all();
        $indicador = DB::table('indicador')
            ->where('indicador.ID_CIDADE', $cidade->ID_CIDADE)
            ->where('indicador.ID_TEMA', $tema->ID_TEMA)
            ->select('indicador.NOME', 'indicador.DESCRICAO', 'indicador.VALOR_META', 'indicador.ID_INDICADOR')
            ->get();
        $pca = DB::table('prestacao_acao')->join('acao', 'acao.ID_ACAO', '=', 'prestacao_acao.ID_ACAO')->get();
        $pci = DB::table('prestacao_indicador')->join('indicador', 'indicador.ID_INDICADOR', '=', 'prestacao_indicador.ID_INDICADOR')->get();
        $gestao = gestao::all();
        return view('temaMetaIndicador', compact('tema', 'cidade', 'meta', 'acao', 'indicador', 'pca', 'pci', 'gestao'));
    }

}