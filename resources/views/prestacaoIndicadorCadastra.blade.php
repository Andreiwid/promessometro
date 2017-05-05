@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO PRESTACAO DE CONTAS DE INDICADORES</title>
        
    </head>  
    <body>
    <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <li>ID_INDICADOR</li>
                            <input type="text" name="ID_INDICADOR"></input><br>
                            <li>ID_RESPONSAVEL_INDICADOR</li>
                            <input type="text" name="ID_RESPONSAVEL_INDICADOR"></input><br>
                            <li>DATA_REFERENCIA</li>
                            <input type="text" name="DATA_REFERENCIA"></input><br>
                            <li>VALOR</li>
                            <input type="text" name="VALOR"></input><br>
                            <li>CONSIDERACAO</li>
                            <input type="text" name="CONSIDERACAO"></input><br>
                            <li>PERCENTUAL_INDICADOR</li>
                            <input type="text" name="PERCENTUAL_INDICADOR"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input><br><br>
                            </form>
                            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/prestacaoindicador'"> 
                </div>
            </div>
        </section>
    </body>
</html>
