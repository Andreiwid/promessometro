<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meta;
use App\Pop_Beneficiada;
use App\Tema;
use App\PageMeta;
use App\Acao;
use App\Usuario;
use App\Responsavel_Acao;
use App\Prestacao_Acao;
use App\Cidade;
use App\Gestao;
use DB;

class PageTemaSelecao extends Controller
{

    public function retorna_informacao($cidade = 'ID_CIDADE')
    {
        $cidade = cidade::where('ID_CIDADE', $cidade)->first();
        $gestao = gestao::all();
        $meta = meta::all();
        $acao = Acao::all();
        $pca = DB::table('prestacao_acao')->join('acao', 'acao.ID_ACAO', '=', 'prestacao_acao.ID_ACAO')->get();
        return view('temaSelecao', compact('cidade', 'gestao', 'meta', 'acao', 'pca'));
        
    }

}