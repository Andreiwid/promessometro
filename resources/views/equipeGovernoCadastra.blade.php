@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO EQUIPE_GOVERNO</title>
        
    </head>  
    <body>
    <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <li>GESTAO</li>
                            <input type="text" name="ID_GESTAO"></input><br>
                            <li>MEMBRO</li>
                            <input type="text" name="ID_MEMBRO"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input><br><br>
                            </form>
                            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/equipegoverno'"> 
                </div>
            </div>
        </section>
    </body>
</html>
