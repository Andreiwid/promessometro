@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO Responsável Indicador</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
       <section style="margin-top: 83px; ">
            <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <li>ID_USUARIO</li> <input type="text" name="ID_USUARIO"></input>
                            <li>ID_INDICADOR</li> <input type="text" name="ID_INDICADOR"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input><br><br>
                        
                    </form>
                    <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/responsavelindicador'"> 
                    </div>
                </div>  
        </section>
    </body>
</html>