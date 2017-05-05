@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Cidade</title>
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
                <h1 class="titulo promeblue">Cadastro de Cidades</h1>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Portal da Cidade:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Área (km²):</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                        </div>
                        <div class="col-md-6 p-fifty">    
                            <label class="promeblue subtitulo3">Número de Habitantes:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
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