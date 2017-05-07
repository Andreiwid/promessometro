<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA EQUIPE</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                    <?php foreach($equipe_governo as $aux): ?> 
                        <input type="hidden" value="<?php echo e($aux->ID_EQUIPE_GOVERNO); ?>" name="ID_EQUIPE_GOVERNO"> 
                        <li>ID_GESTAO</li> <input type="text" value="<?php echo e($aux->ID_GESTAO); ?>" maxlength="50" name="ID_GESTAO">
                        <li>ID_MEMBRO</li> <input type="text" value="<?php echo e($aux->ID_MEMBRO); ?>" maxlength="50" name="ID_MEMBRO">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <br><input type="submit" value="Alterar"><br>
                        <?php endforeach; ?>
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/equipegoverno'">   
                    </div>
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>