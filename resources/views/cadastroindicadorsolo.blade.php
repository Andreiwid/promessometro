<?php
   session_start();
?>

@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Indicador</title>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <h1 class="titulo promeblue">Cadastro de Indicador</h1>
                    <div class="container">
                        <form action = "cadastroindicadorsolo" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-12"> 
                            <label class="promeblue subtitulo3">Gestão:</label>
                            <select name="ID_GESTAO" class="inputlist input">
                                @foreach ($gestao as $auxgestao)
                                    <option value="{{ $auxgestao->ID_GESTAO }}">{{ $auxgestao->PROMESSA_CAMPANHA }}</option>
                                @endforeach
                            </select>
                            <label class="promeblue subtitulo3">Nome:</label>
                            <input type="text" name="NOME" class="imputnormal input"></input>
                            <label class="promeblue subtitulo3">Descricao:</label>
                            <input type="text" name="DESCRICAO" class="inputtext input"></input>
                            <label class="promeblue subtitulo3">Protocolo:</label>
                            <input type="number" name="PROTOCOLO" class="imputnormal input"></input>
                            <br>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">UND.Medida</label>
                                <select name="UND_MEDIDA">
                                            <option>R$</option>
                                            <option>%</option>
                                            <option>QTD</option>
                                            <option>M</option>
                                            <option>M²</option>
                                            <option>M³</option>
                                            <option>KM</option>
                                            <option>KM²</option>
                                            <option>Pessoas</option>
                                            <option>kWh</option>
                                </select>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Valor Meta:</label>
                                <input type="number" step="any" name="VALOR_META" class="imputnormal input"></input>
                            </div>
                            <div class="col-md-12 p-m-null">
                                <label class="promeblue subtitulo3">Fonte:</label>
                                <input type="text" name="FONTE" class="imputnormal input"></input>
                            </div>
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
                                <select id="cidades" name="ID_CIDADE" class="margin-bot input smallinputlist">
                                    <option value="">Selecione a cidade</option>
                                </select>                      
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Tema:</label>
                                <select name="ID_TEMA" class="inputlist input">
                                @foreach ($tema as $auxtema)
                                    <option value="{{ $auxtema->ID_TEMA }}">{{ $auxtema->NOME }}</option>
                                @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="col-md-12 p-m-null">
                                <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
                             </div>
                             </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/funcoes.js"></script>
</body>
</html>