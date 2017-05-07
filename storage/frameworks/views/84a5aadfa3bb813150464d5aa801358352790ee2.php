<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/jquery.circliful.min.js"></script>

    </head>  
    <body>
     <?php echo $__env->yieldSection(); ?>

     <nav class="navbar navbar-inverse navbar-fixed-top agencyfb p-m-null">
     <div class="container navbartop-m">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/promessometro/public">Promessômetro</a>
        </div>
        <div id="navbar1" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <section>
                    <div class="formlogin">
                        <li>
                            <label for="usuario">Login
                                <input type="text" id="usuario" name="usuario"></input>
                            </label>
                        </li>
                    </div>
                    <div class="formlogin">
                        <li>
                            <label for="senha">Senha
                                <input type="text" id="senha" name="senha"></input>
                            </label>
                        </li>
                    </div>
                    <div class="formlogin">
                        <li>
                            <button class="btn btn-primary btn-sm navbar-btn-fontsize">Login</button>
                            <button class="btn btn-default btn-sm navbar-btn-fontsize">Cadastre-se</button>
                        </li>
                    </div>
                </section>
            </ul>
        </div>
    </div>
    <div class="second-div">
        <a href="#"> Quem Somos</a><a>|</a>
        <a href="#"> Blog Tô de Olho</a><a>|</a>
        <a href="#"> Parceiros</a><a>|</a>
        <a href="#"> Contato</a>
    </div>
</nav>
<footer>
    <div class="navbar-collapse collapse navbar-inverse navbar-foot">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <li><a href="#"><b><i>Home</b></i></a></li>
                    <li><a href="#">objetivo</a></li>
                    <li><a href="#">de olho no promessômetro</a></li>
                    <li><a href="#">Parceiros</a></li>
                </div>
                <div class="col-md-4">
                    <li><a href="#"><b><i>Auditor Cidadão</i></b></a></li>
                    <li><a href="#">placar da câmara de vereadores</a></li>
                    <li><a href="#">programa de metas - 2013 2016</a></li>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="#"><b><i>Fale Conosco</i></b></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> vilela@promessometro.org</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-comment"></span> +55 19 9 8161 9281</a></li>
                        <li>
                            <a href="#"><i class="fa fa-facebook-square fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter-square fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <br><br><br>
            <p class="pull-left direitosautorais"><b>Promessômetro © 2016 | auditoria cidadã</b> e avaliação de sustentabilidade da gestão municipal</p>
        </div>
    </div>
</footer>

</body>
</html>
