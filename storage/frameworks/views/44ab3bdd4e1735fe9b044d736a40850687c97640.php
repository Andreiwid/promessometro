<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO PRESTACAO DE CONTAS DE AÇÃO</title>
        
    </head>  
    <body>
    <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                            <li>ID_RESPONSAVEL_ACAO</li>
                            <input type="text" name="ID_RESPONSAVEL_ACAO"></input><br>
                            <li>ID_ACAO</li>
                            <input type="text" name="ID_ACAO"></input><br>
                            <li>PERCENTUAL_ACAO</li>
                            <input type="text" name="PERCENTUAL_ACAO"></input><br>
                            <li>CONSIDERACAO</li>
                            <input type="text" name="CONSIDERACAO"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input><br><br>
                            </form>
                            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/prestaacao'"> 
                </div>
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>