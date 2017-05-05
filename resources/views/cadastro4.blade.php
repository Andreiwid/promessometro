@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Metas e Ações</title>
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
                <h1 class="titulo promeblue">Cadastro de Metas</h1>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Tema:</label>
                            <input type="text" name="option" list="exampleList1" class="inputlist input">
                            <datalist id="exampleList1">
                                <option>Tema A</option>
                                <option >Tema B</option>
                            </datalist>
                            <label class="promeblue subtitulo3">Título:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Resumo:</label>
                            <input type="text" name="ID_TEMA" class="inputtext input"></input>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Adicionar mais Metas</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Descrição:</label>
                            <input type="text" name="ID_TEMA" class="inputtext input"></input>
                            <label class="promeblue subtitulo3">População Beneficiada:</label>
                            <input type="text" name="option" list="exampleList" class="inputlist input">
                            <datalist id="exampleList">
                                <option>Pop A</option>
                                <option >Pop B</option>
                            </datalist>
                            <div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Início:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_INICIO" class="smallinputlist input">
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <label class="promeblue subtitulo3">Data Final:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_FIM" class="smallinputlist input">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="gradient-line">
                </form>
                <h1 class="subtitulo promeblue">Cadastro de Temas</h1>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">
                            <label class="promeblue subtitulo3">Nome:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Descrição:</label>
                            <input type="text" name="ID_TEMA" class="inputtext input"></input>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Adicionar mais Ações para essa meta</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Investimento Previsto:</label>
                            <input type="text" placeholder="R$ 0,00" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Investimento Efetuado:</label>
                            <input type="text" placeholder="R$ 0,00" name="ID_TEMA" class="inputnormal input"></input>
                            <div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Início:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_INICIO" class="smallinputlist input">
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <label class="promeblue subtitulo3">Data Final:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_FIM" class="smallinputlist input">
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