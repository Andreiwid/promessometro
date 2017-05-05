@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA TEMAS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 83px;">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                 
                    @foreach ($tema as $aux) 
                        <input type="hidden" value="{{ $aux->ID_TEMA }}" name="ID_TEMA"> 
                        <li>Nome</li> <input type="text" value="{{ $aux->NOME }}" maxlength="50" name="NOME"><br>
                        <li>Sigla</li> <input type="text" value="{{ $aux->SIGLA }}" maxlength="50" name="SIGLA"><br>             
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Alterar">
                        @endforeach                    
                    <br><br>
                    </form>
                    <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/tema'"> 
                    </div>
                
            </div>
        </section>
    </body>
</html>
