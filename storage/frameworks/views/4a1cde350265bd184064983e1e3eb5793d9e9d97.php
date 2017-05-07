<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA METAS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
            <h1 class="titulo promeblue">Atualização de Metas</h1>
                 <form action="consultar" method="post">
                    <?php foreach((array) $meta as $aux): ?> 
                    <div class="container"> 
                        <input type="hidden" value="<?php echo e($aux->ID_META); ?>" name="ID_META"> 
                        
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">ID Tema:</label>  
                            <input type="text" value="<?php echo e($aux->ID_TEMA); ?>" class="inputlist input" maxlength="50" name="ID_TEMA">

                            <label class="promeblue subtitulo3">Descrição:</label> 
                            <input type="text" value="<?php echo e($aux->DESCRICAO); ?>" class="inputlist input" maxlength="50" name="DESCRICAO">
                        
                            <label class="promeblue subtitulo3">ID Pop Beneficiada:</label>  
                            <input type="text" value="<?php echo e($aux->ID_POP_BENEFICIADA); ?>" class="inputlist input" maxlength="50" name="ID_POP_BENEFICIADA">
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Data Inicio:</label>   
                            <input type="text" value="<?php echo e($aux->DATA_INICIO); ?>" class="inputlist input" maxlength="50" name="DATA_INICIO">

                            <label class="promeblue subtitulo3">Data Fim:</label> 
                            <input type="text" value="<?php echo e($aux->DATA_FIM); ?>" class="inputlist input" maxlength="50" name="DATA_FIM">

                            <label class="promeblue subtitulo3">Status Meta:</label>  
                            <input type="text" value="<?php echo e($aux->STATUS_META); ?>" class="inputlist input" maxlength="50" name="STATUS_META">

                            <label class="promeblue subtitulo3">ID Gestão:</label>  
                            <input type="text" value="<?php echo e($aux->ID_GESTAO); ?>" class="inputlist input" maxlength="50" name="ID_GESTAO">
                        </div>
                    </div>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <br><input type="submit" value="Alterar"><br>
                        <?php endforeach; ?>
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/meta'">   
                    </div>
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>