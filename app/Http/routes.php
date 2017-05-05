<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/chart', function () {
    return view('welcome2');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/tema', function () {
    return view('temaPrincipal');
});

Route::get('/metaDetail', function () {
    return view('metaDetalhada');
});

Route::get('/popbeneficiada', function () {
    return view('popBeneficiadaPrincipal');
});

Route::get('/equipegoverno', function () {
    return view('equipeGovernoPrincipal');
});

Route::get('/tema/cadastrar', function (){
	return view('temaCadastra');
});

Route::get('/prestaacao', function () {
    return view('prestaAcaoPrincipal');
});

Route::get('/responsavelindicador', function () {
    return view('responsavelIndicadorPrincipal');
});

Route::get('/usuariometa', function () {
    return view('usuarioMetaTemp');
});

Route::post('/tema/cadastrar', 'TemaController@cadastrar');
Route::get('/tema/consultar', 'TemaController@consultar');
Route::post('/tema/consultar', 'TemaController@atualizar');

Route::get('/dogexplode', function(){
    return view('cadastro7');
});

Route::post('/meta/atualizar', 'MetaController@atualiza_especifica');
Route::get('/meta/atualizar', 'MetaController@atualiza_especifica');

Route::get('/meta/cadastrar', 'MetaController@carrega');
Route::post('/meta/cadastrar', 'MetaController@cadastrar');
Route::get('/meta', 'MetaController@consultar');
Route::post('/meta/consultar', 'MetaController@atualizar');

Route::get('/indicadorDetail', function () {
    return view('indicadorDetalhada');
});

Route::get('/detalheindicador/{ID_INDICADOR}', 'PageIndicadorController@retorna_detalhada');

Route::get('/detalhemeta/{ID_META}', 'PageMetaController@retorna_detalhada');
Route::post('/detalhemeta/{ID_META}/SeguirMeta', 'PageMetaController@SeguirMeta');
Route::post('/detalhemeta/{ID_META}/DeixaSeguir', 'PageMetaController@DeixaSeguir');

Route::get('/temaSelection/{ID_CIDADE}', 'PageTemaSelecao@retorna_informacao');

Route::get('/temaMetaIndicador/{ID_TEMA}/{ID_CIDADE}', 'PageTemaMetaIndicadorController@retorna_detalhada');

Route::get('/popbeneficiada/cadastrar', function (){
	return view('popBeneficiadaCadastra');
});
Route::post('/popbeneficiada/cadastrar', 'PopBeneficiadaController@cadastrar');
Route::get('/popbeneficiada/consultar', 'PopBeneficiadaController@consultar');
Route::post('/popbeneficiada/consultar', 'PopBeneficiadaController@atualizar');

Route::get('/equipegoverno/cadastrar', function (){
	return view('equipeGovernoCadastra');
});
Route::post('/equipegoverno/cadastrar', 'EquipeGovernoController@cadastrar');
Route::get('/equipegoverno/consultar', 'EquipeGovernoController@consultar');
Route::post('/equipegoverno/consultar', 'EquipeGovernoController@atualizar');

Route::get('/prestaacao/cadastrar', function (){
	return view('prestaAcaoCadastra');
});
Route::post('/prestaacao/cadastrar', 'PrestaAcaoController@cadastrar');
Route::get('/prestaacao/consultar', 'PrestaAcaoController@consultar');
Route::post('/prestaacao/consultar', 'PrestaAcaoController@atualizar');

Route::get('/responsavelindicador/cadastrar', function (){
    return view('responsavelIndicadorCadastra');
});
Route::post('/responsavelindicador/cadastrar', 'ResponsavelIndicadorController@cadastrar');
Route::get('/responsavelindicador/consultar', 'ResponsavelIndicadorController@consultar');
Route::post('/responsavelindicador/consultar', 'ResponsavelIndicadorController@atualizar');

Route::get('/prestacaoindicador', function () {
    return view('prestacaoIndicadorPrincipal');
});

Route::get('/prestacaoindicador/cadastrar', function (){
    return view('prestacaoIndicadorCadastra');
});

Route::post('/prestacaoindicador/cadastrar', 'PrestacaoIndicadorController@cadastrar');
Route::get('/prestacaoindicador/consultar', 'PrestacaoIndicadorController@consultar');
Route::post('/prestacaoindicador/consultar', 'PrestacaoIndicadorController@atualizar');

Route::get('/prestacaoprojeto', function () {
    return view('prestacaoProjetoPrincipal');
});

Route::get('/prestacaoprojeto/cadastrar', function (){
    return view('prestacaoProjetoCadastra');
});
Route::post('/prestacaoprojeto/cadastrar', 'PrestacaoProjetoController@cadastrar');
Route::get('/prestacaoprojeto/consultar', 'PrestacaoProjetoController@consultar');
Route::post('/prestacaoprojeto/consultar', 'PrestacaoProjetoController@atualizar');

Route::get('/cadastrousuario', function (){
    return view('cadastro1');
});

Route::get('cadastrocidade', function (){
    return view('cadastro2');
});

Route::get('cadastrogestao', function (){
    return view('cadastro3');
});

Route::get('cadastrometaacao', function (){
    return view('cadastro4');
});

Route::get('validacao', function (){
    return view('cadastro5');
});

Route::get('cadastroindicador', function (){
    return view('cadastro6');
});

Route::get('cadastro', function (){
    return view('cadastro');
});
Route::get('cadastro','StepLineController@carregaUser');
Route::post ('cadastro','StepLineController@cadastrar');
Route::get ('cadastro/consultar','StepLineController@consultar');

Route::get('/temaMetaIndicador', function (){
    return view('temaMetaIndicador');
});

Route::get('/meusdados1', function (){
    return view('meusDadosNv1');
});

Route::get('/meusdados1', 'MeusDadosController@consultarnv1');

Route::get('/meusdados2', 'MeusDadosController@consultarnv2');

Route::get('/meusdadosadm', 'DadosAdminController@consultar');

Route::get('/principal', function(){
    return view('index');
});

Route::get('/QuemSomos', function () {
    return view('QuemSomos');
});

Route::get('/ToDeOlho', function () {
    return view('ToDeOlho');
});

Route::get('/contato', function (){
    return view('contato');
});

Route::get('/parceiros', function (){
    return view('parceiros');
});

Route::get('/cadastrogestaosolo', 'GestaoSoloController@consultar');
Route::post('/cadastrogestaosolo', 'GestaoSoloController@cadastrar');

Route::get('/cadastrometasolo', 'MetaSoloController@consultar');
Route::post('/cadastrometasolo', 'MetaSoloController@cadastrar');

Route::get('/cadastroindicadorsolo', 'IndicadorSoloController@consultar');
Route::post('/cadastroindicadorsolo', 'IndicadorSoloController@cadastrar');

Route::get('/cadastroacaosolo', 'AcaoSoloController@consultar');
Route::post('/cadastroacaosolo', 'AcaoSoloController@cadastrar');

Route::get('/cadastroprestacaosolo', 'PrestAcaoSoloController@consultar');
Route::post('/cadastroprestacaosolo', 'PrestAcaoSoloController@cadastrar');

Route::get('/cadastroprestindicadorsolo', 'PrestIndicadorSoloController@consultar');
Route::post('/cadastroprestindicadorsolo', 'PrestIndicadorSoloController@cadastrar');

Route::get('/tipoCadastro', function(){
    return view('tipoCadastro');
});


Route::get('/CadastroUsuarioComum', function(){
    return view('CadastroUsuarioComum');
});

Route::get('/CadastroUsuarioComum', 'UsuarioComumController@consultar');
Route::post('/CadastroUsuarioComum', 'UsuarioComumController@cadastrar');






