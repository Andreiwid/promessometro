<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA POPULAÇÃO BENEFICIADA</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                 
                 <?php foreach($popbeneficiada as $aux): ?> 
                        <input type="hidden" value="<?php echo e($aux->ID_POP_BENEFICIADA); ?>" name="ID_POP_BENEFICIADA"> 
                        <li>Título</li> <input type="text" value="<?php echo e($aux->TITULO); ?>" maxlength="50" name="TITULO"><br>
                        <li>Descrição</li> <input type="text" value="<?php echo e($aux->DESCRICAO); ?>" maxlength="50" name="DESCRICAO"><br>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" value="Alterar">
                        <?php endforeach; ?>
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/popbeneficiada'"> 
                    </div>
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>