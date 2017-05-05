@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA PRESTACAO DE CONTAS DE AÇÃO</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                    @foreach ($prestaacao as $aux) 
                        <input type="hidden" value="{{ $aux->ID_PRESTA_CONTA_ACAO }}" name="ID_PRESTA_CONTA_ACAO"> 
                        <li>ID_RESPONSAVEL_ACAO</li> <input type="text" value="{{ $aux->ID_RESPONSAVEL_ACAO }}" maxlength="50" name="ID_RESPONSAVEL_ACAO">
                        <li>ID_ACAO</li> <input type="text" value="{{ $aux->ID_ACAO }}" maxlength="50" name="ID_ACAO">
                        <li>PERCENTUAL_ACAO</li> <input type="text" value="{{ $aux->PERCENTUAL_ACAO }}" maxlength="50" name="PERCENTUAL_ACAO">
                        <li>CONSIDERACAO</li> <input type="text" value="{{ $aux->CONSIDERACAO }}" maxlength="50" name="CONSIDERACAO">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <br><input type="submit" value="Alterar"><br>
                        @endforeach
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/prestaacao'">   
                    </div>
            </div>
        </section>
    </body>
</html>
