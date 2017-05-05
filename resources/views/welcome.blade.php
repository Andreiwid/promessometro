@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Promessômetro</title>
</head>

<body>        
    <section style="margin-top: 83px;">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                <h1 class="promeblue">PROMESSÔMETRO NACIONAL</h1>
                <div class="row" style="padding: 20px;">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                        <li>
                            <input type="submit" value="Tema" class="btn-primary btn-pad" onclick="location.href= 'tema'">
                        </li><br>
                        <li>
                            <input type="submit" value="População Beneficiada" class="btn-primary btn-pad" onclick="location.href= 'popbeneficiada'">
                        </li><br>
                        <li>
                            <input type="submit" value="Meta" class="btn-primary btn-pad" onclick="location.href= 'meta'">
                        </li><br>
                        <li>
                            <input type="submit" value="Meta_Indicador" class="btn-primary btn-pad" onclick="location.href= 'metaindicador'">
                        </li><br>
                        <li>
                            <input type="submit" value="Presta Acao" class="btn-primary btn-pad" onclick="location.href= 'prestaacao'">
                        </li><br>
                    </div>
                    
                    <div class="col-md-4">
                        <li>
                            <input type="submit" value="Responsavel Indicador" class="btn-primary btn-pad" onclick="location.href= 'responsavelindicador'">
                        </li><br>
                        <li>
                            <input type="submit" value="Prestacao Indicador" class="btn-primary btn-pad" onclick="location.href= 'prestacaoindicador'">
                        </li><br>
                        <li>
                            <input type="submit" value="Prestacao Projeto" class="btn-primary btn-pad" onclick="location.href= 'prestacaoprojeto'">
                        </li><br>
                        <li>
                            <input type="submit" value="Equipe_Governo" class="btn-primary btn-pad" onclick="location.href= 'equipegoverno'">
                        </li><br>
                        <li>
                            <input type="submit" value="Usuario Segue Meta" class="btn-primary btn-pad" onclick="location.href= 'usuariometa'">
                        </li><br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
