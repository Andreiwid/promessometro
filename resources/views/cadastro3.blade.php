@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Gestão</title>
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
                <h1 class="titulo promeblue">Cadastro de Gestão</h1>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Nome do Prefeito:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Nome do Vice Prefeito:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Coligação:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <div class="col-md-12 p-m-null">
                                <div class="col-md-8 p-m-null">
                                    <label class="promeblue subtitulo3">Nome do Vereador:</label>
                                    <input type="text" name="ID_TEMA" class="smallinput input"></input>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Adicionar mais vereadores</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label class="promeblue subtitulo3">Partido:</label>
                                    <input type="text" name="option" list="exampleList" class="partidoinput input">
                                    <datalist id="exampleList">
                                        <option>PT</option>
                                        <option >PSol</option>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">    
                            <label class="promeblue subtitulo3">Link da Promessa Campanha:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Data Início:</label>
                                <form action="action_page.php">
                                    <input type="date" name="DATA_INICIO" class="dateinputlist input">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <label class="promeblue subtitulo3">Data Final:</label>
                                <form action="action_page.php">
                                    <input type="date" name="DATA_FIM" class="dateinputlist input">
                                </form>
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