<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO POPULAÇÃO BENEFICIADA</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
       <section style="margin-top: 75px; ">
            <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                        
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <li>Título</li> <input type="text" name="TITULO"></input>
                            <li>Descrição</li> <input type="text" name="DESCRICAO"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg"></input><br><br>
                        
                    </form>
                    <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public/popbeneficiada'"> 
                    </div>
                </div>  
        </section>
    </body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>