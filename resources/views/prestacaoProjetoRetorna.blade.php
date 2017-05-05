@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA PRESTACAO DE CONTAS DE PROJETOS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                    @foreach ($prestacao_projeto as $aux) 
                        <input type="hidden" value="{{ $aux->ID_PRESTACAO_PROJETO }}" name="ID_PRESTACAO_PROJETO"> 
                        <li>ID_PROJETO</li> <input type="text" value="{{ $aux->ID_PROJETO }}" maxlength="50" name="ID_PROJETO">
                        <li>ID_RESPONSAVEL_PROJETO</li> <input type="text" value="{{ $aux->ID_RESPONSAVEL_PROJETO }}" maxlength="50" name="ID_RESPONSAVEL_PROJETO">
                        <li>DATA_REFERENCIA</li> <input type="text" value="{{ $aux->DATA_REFERENCIA }}" maxlength="50" name="DATA_REFERENCIA">
                        <li>PERCENTUAL_PROJETO</li> <input type="text" value="{{ $aux->PERCENTUAL_PROJETO }}" maxlength="50" name="PERCENTUAL_PROJETO">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                        <br><input type="submit" value="Alterar"><br>
                        @endforeach
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/prestacaoprojeto'">   
                    </div>
            </div>
        </section>
    </body>
</html>
