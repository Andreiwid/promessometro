@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Indicadores</title>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <div style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastrousuario"><img src="img/1-sel-am.png"></a>
                            <a href="cadastrocidade"><img src="img/2-vm.png"></a>
                            <a href="cadastrogestao"><img src="img/3-vm.png"></a>
                            <a href="cadastrometaacao"><img src="img/4-vm.png"></a>
                        </div>
                    </div>
                </div>
                <h1 class="titulo promeblue">Cadastro de Indicadores</h1>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Nome:</label>
                            <input type="text" name="option"  class=" input inputlist">
                            
                            <label class="promeblue subtitulo3">Gestão</label>
                            <input type="text" name="ID_TEMA" list="gest-list" class="inputnormal input"></input>
                            <datalist id="gest-list">
                                <option>Gestao A</option>
                                <option>Gestao B</option>
                                <option>Gestao C</option>
                            </datalist>

                            <label class="promeblue subtitulo3">Descricão</label>
                            <textarea type="text" class="inputtext input"></textarea>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Adicionar mais Indicadores</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Protocolo:</label>
                            <input type="text" name="ID_TEMA" class="input inputlist"></input>

                            <label class="promeblue subtitulo3">Fonte:</label>
                            <input type="text" name="option" list="exampleList" class="inputlist input">
                            
                            <div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">UND.Medida</label>
                                        <input type="text" list="med-list" class="smallinputlist input">
                                    <datalist id="med-list">
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
                                    </datalist>
                                    
                                </div>
                                <div class="col-md-6 p-m-null">
                                    <input type="text" list="med-list" class="smallinputlist input margin-p" style="margin-top:40px">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </form>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/meta'"> 
        </div>
    </section>
</body>
</html>