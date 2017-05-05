@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA PRESTACAO DE CONTAS DE INDICADORES</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                    @foreach ($prestacao_indicador as $aux) 
                        <input type="hidden" value="{{ $aux->ID_PRESTACAO_INDICADOR }}" name="ID_PRESTACAO_INDICADOR"> 
                        <li>ID_INDICADOR</li> <input type="text" value="{{ $aux->ID_INDICADOR }}" maxlength="50" name="ID_INDICADOR">
                        <li>ID_RESPONSAVEL_INDICADOR</li> <input type="text" value="{{ $aux->ID_RESPONSAVEL_INDICADOR }}" maxlength="50" name="ID_RESPONSAVEL_INDICADOR">
                        <li>DATA_REFERENCIA</li> <input type="text" value="{{ $aux->DATA_REFERENCIA }}" maxlength="50" name="DATA_REFERENCIA">
                        <li>VALOR</li> <input type="text" value="{{ $aux->VALOR }}" maxlength="50" name="VALOR">
                        <li>CONSIDERACAO</li> <input type="text" value="{{ $aux->CONSIDERACAO }}" maxlength="50" name="CONSIDERACAO">
                        <li>PERCENTUAL_INDICADOR</li> <input type="text" value="{{ $aux->PERCENTUAL_INDICADOR }}" maxlength="50" name="PERCENTUAL_INDICADOR">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <br><input type="submit" value="Alterar"><br>
                        @endforeach
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/prestacaoindicador'">   
                    </div>
            </div>
        </section>
    </body>
</html>
