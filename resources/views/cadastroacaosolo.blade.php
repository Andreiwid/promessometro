<?php
   session_start();
?>

@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Acão</title>
</head>

<body>     
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <h1 class="titulo promeblue">Cadastro de Acão</h1>
                    <div class="container">
                        <div>
                            <form action = "cadastroacaosolo" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Estado:</label>
                                <select id="estado" class="input smallinputlist" onChange="carregaCidade(this.value);">
                                    <option value="">Selecione o estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espirito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="PR">Paraná</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Cidade:</label>
                                <select id="cidades" name="cidade" class="margin-bot input smallinputlist">
                                    <option value="">Selecione a cidade</option>
                                </select>                      
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Tema:</label>
                                <select id="tema" class="smallinput inputlist" name="tema" onChange="carregaMeta()";>
                                        @foreach($tema as $auxtema)
                                            <option value="{{ $auxtema->ID_TEMA }}">{{ $auxtema->NOME }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Meta:</label>
                                <select id="metas" name="ID_META" class="input smallinputlist">
                                     @foreach($meta as $auxtema)
                                            <option value="{{ $auxtema->ID_META }}">{{ $auxtema->DESCRICAO }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 p-m-null">
                                <label class="promeblue subtitulo3">Descrição:</label>
                                <input type="text" name="DESCRICAO" class="smallinputlist input"></input>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Data Início:</label>
                                    <input type="date" name="DATA_INICIO" class="smallinputlist input">
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Data Final:</label>
                                    <input type="date" name="DATA_FIM" class="smallinputlist input">
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Investimento Previsto:</label>
                                <input type="text" placeholder="R$ 0,00" name="INVESTIMENTO_PREVISTO" class="smallinputlist input"></input>
                                <label class="promeblue subtitulo3">Investimento Efetuado:</label>
                                <input type="text" placeholder="R$ 0,00" name="INVESTIMENTO_EXECUTADO" class="smallinputlist input"></input>
                            </div>
                            <div class="col-md-12 p-m-null"> 
                                <label class="promeblue subtitulo3">Responsaveis:</label>
                                <input type="text" name="RESPONSAVEIS" class="smallinputlist input"></input>
                            </div>
                            <div class="col-md-12 p-m-null">
                                <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="js/funcoes.js"></script>
</body>
</html>