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
                 
                    <?php foreach($tema as $aux): ?> 
                        <input type="hidden" value="<?php echo e($aux->ID_TEMA); ?>" name="ID_TEMA"> 
                        <li>Nome</li> <input type="text" value="<?php echo e($aux->NOME); ?>" maxlength="50" name="NOME"><br>
                        <li>Sigla</li> <input type="text" value="<?php echo e($aux->SIGLA); ?>" maxlength="50" name="SIGLA"><br>             
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" value="Alterar">
                        <?php endforeach; ?>                    
                    <br><br>
                    </form>
                    <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/tema'"> 
                    </div>
                
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>