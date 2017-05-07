<!DOCTYPE html>
<html>
    <head>
        <title>Equipe_Governo Page</title>
    </head>
    <body>
    <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
        <div class="middlecenter-cadastra text-center">
        <h1>Equipe Governo</h1>
            <input type="submit" value="Cadastrar" class="btn-primary btn-pad" onclick="location.href= 'equipegoverno/cadastrar'">
            <input type="submit" value="Atualizar" class="btn-primary btn-pad" onclick="location.href= 'equipegoverno/consultar'">
            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public'">
            </div>
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>