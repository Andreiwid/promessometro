<!DOCTYPE html>
<html>
    <head>
        <title>PRESTACAO DE CONTAS DE AÇÃO Page</title>
    </head>
    <body>
    <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
        <div class="middlecenter-cadastra text-center">
        <h1 style="font-family: Lato; font-style: bold;">PRESTACAO DE CONTAS DE AÇÃO</h1>
            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg" onclick="location.href= 'prestaacao/cadastrar'">
            <input type="submit" value="Atualizar" class="btn btn-success btn-lg" onclick="location.href= 'prestaacao/consultar'">
            <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public'">
            </div>
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>