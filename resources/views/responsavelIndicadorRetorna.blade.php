@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA Responsável Indicador</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 83px;">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                 
                 @foreach ($responsavel_indicador as $aux) 
                        <input type="hidden" value="{{ $aux->ID_RESPONSAVEL_INDICADOR }}" name="ID_RESPONSAVEL_INDICADOR"> 
                        <li>ID_USUARIO</li> <input type="text" value="{{ $aux->ID_USUARIO }}" maxlength="50" name="ID_USUARIO"><br>
                        <li>ID_INDICADOR</li> <input type="text" value="{{ $aux->ID_INDICADOR }}" maxlength="50" name="ID_INDICADOR"><br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Alterar">
                        @endforeach
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/responsavelindicador'"> 
                    </div>
            </div>
        </section>
    </body>
</html>
