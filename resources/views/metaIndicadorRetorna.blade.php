@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA META_INDICADOR</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                    @foreach ($metaindicador as $aux) 
                        <input type="hidden" value="{{ $aux->ID_META_INDICADOR }}" name="ID_META_INDICADOR"> 
                        <li>ID_INDICADOR</li> <input type="text" value="{{ $aux->ID_INDICADOR }}" maxlength="50" name="ID_INDICADOR">
                        <li>ID_GESTAO</li> <input type="text" value="{{ $aux->ID_GESTAO }}" maxlength="50" name="ID_GESTAO">
                        <li>VALOR_META</li> <input type="text" value="{{ $aux->VALOR_META }}" maxlength="50" name="VALOR_META">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <br><input type="submit" value="Alterar"><br>
                        @endforeach
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/metaindicador'">   
                    </div>
            </div>
        </section>
    </body>
</html>
