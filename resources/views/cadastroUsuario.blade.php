@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>Promessômetro</title>
    </head>

    <body>        
        <section style="margin-top: 83px; ">
            <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                <h1 style="font-family: Lato; font-style: bold;">PROMESSÔMETRO NACIONAL</h1>
                    <li><input type="submit" value="Tema" class="btn btn-success btn-lg" onclick="location.href= 'tema'"></li><br>
                    <li><input type="submit" value="População Beneficiada" class="btn btn-success btn-lg" onclick="location.href= 'popbeneficiada'"></li><br>
                    <li><input type="submit" value="Meta" class="btn btn-success btn-lg" onclick="location.href= 'meta'"></li><br>
                    <li><input type="submit" value="Meta_Indicador" class="btn btn-success btn-lg" onclick="location.href= 'metaindicador'"></li><br>
                    <li><input type="submit" value="Presta Acao" class="btn btn-success btn-lg" onclick="location.href= 'prestaacao'"></li><br>
                    <li><input type="submit" value="Responsavel Indicador" class="btn btn-success btn-lg" onclick="location.href= 'responsavelindicador'"></li><br>
                    <li><input type="submit" value="Prestacao Indicador" class="btn btn-success btn-lg" onclick="location.href= 'prestacaoindicador'"></li><br>
                    <li><input type="submit" value="Prestacao Projeto" class="btn btn-success btn-lg" onclick="location.href= 'prestacaoprojeto'"></li><br>
                    <li><input type="submit" value="Equipe_Governo" class="btn btn-success btn-lg" onclick="location.href= 'equipegoverno'"></li><br>
                    <li><input type="submit" value="Usuario Segue Meta" class="btn btn-success btn-lg" onclick="location.href= 'usuariometa'"></li>
                </div>
            </div>
        </section>
    </body>
</html>
