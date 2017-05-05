@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO METAS</title>
    </head>  
    <body>
    <section>
        <div class="cadastra-stepline">
                <div class="formatacao-telas-cadastro">
                <h1 class="titulo promeblue">Cadastro de Metas</h1>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Tema:</label>                            
                              <select class="inputlist input" name="ID_TEMA">
                                @foreach($tema as $aux)
                                    <option value="{{ $aux->ID_TEMA }}">{{ $aux->NOME }}</option>
                                @endforeach
                              </select>

                            <label class="promeblue subtitulo3">Título:</label>
                            <input type="text" name="OBJETIVO" class="inputnormal input"></input>

                            <label class="promeblue subtitulo3">Resumo:</label>
                            <textarea type="text" name="RESUMO" class="inputtext input"></textarea>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Adicionar mais Metas</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Descrição:</label>
                            <textarea type="text" name="DESCRICAO" class="inputtext input"></textarea>

                            <label class="promeblue subtitulo3">Status Meta:</label>
                            <input type="text" name="STATUS_META" class="inputnormal input"></input>
                            
                            <label class="promeblue subtitulo3">Gestão:</label>
                            <input type="text" name="ID_GESTAO" class="inputnormal input"></input>

                            <label class="promeblue subtitulo3">População Beneficiada:</label>
                            <select class="inputlist input" name="ID_POP_BENEFICIADA">
                                @foreach ($popbeneficiada as $aux)
                                    <option value='{{ $aux->ID_POP_BENEFICIADA }}'>{{ $aux->TITULO }}</option>
                                @endforeach
                            </select>

                            <div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Início:</label>
                                    <input type="date" name="DATA_INICIO" class="smallinputlist input">
                                </div>
                                <div class="col-md-6">
                                    <label class="promeblue subtitulo3">Data Final:</label>
                                    <input type="date" name="DATA_FIM" class="smallinputlist input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="gradient-line">
                    <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input><br><br>
                </form>


                <!--<h1 class="titulo promeblue">Cadastro de Metas</h1><br><br>
                    <form action = "cadastrar" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <li>Objetivo</li>
                            <input type="text" name="OBJETIVO"></input><br>
                            
                            <li>Resumo</li>
                            <input type="text" name="RESUMO"></input><br>
                            
                            <li>Descrição</li>
                            <input type="text" name="DESCRICAO"></input><br>
                            
                            <li>ID Pop Beneficiada</li>
                            <select name="ID_POP_BENEFICIADA">
                                @foreach ($popbeneficiada as $aux) 
                                    <option value='{{ $aux->ID_POP_BENEFICIADA }}'>{{ $aux->TITULO }}</option>
                                @endforeach
                            </select>
                            
                            <li>Data Início</li>
                            <input type="date" name="DATA_INICIO"></input><br>
                            
                            <li>Data Fim</li>
                            <input type="date" name="DATA_FIM"></input><br>
                            
                            <li>Status Meta</li>
                            <input type="text" name="STATUS_META"></input><br>
                            
                            <li>ID Gestão</li>
                            <input type="text" name="ID_GESTAO"></input><br>
                            
                            <li>ID Tema</li>
                            <input type="text" name="ID_TEMA"></input><br><br>
                            
                            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input><br><br>
                        </form>-->
                            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/meta'"> 
                </div>
            </div>
        </section>
    </body>
</html>