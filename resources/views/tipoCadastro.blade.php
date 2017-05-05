<?php 
    session_start();
 ?>

@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>
</head>

<body>        
    <section>
        <div class="middlecenter-cadastra">
            <div class="row">
            <div class="col-md-12">
            <h1 class="titulo promeblue">Cadastro</h1>       
        </div>

            <P class="texto">
                O Promessômetro permite que você se cadastre como usuário comum ou auditor cidadão. De que maneira deseja prosseguir? 
            </p>
        <div>
            <a href="CadastroUsuarioComum"><input type="submit" value="Usuário Comum" class="btn btn-info btn-primary btn-lg"></input></a>
            <a href="cadastro"><input type="submit" value="Auditor Cidadão" class="btn btn-info btn-primary btn-lg"></input></a>   
        </div>
    </section>
</body>
</html>