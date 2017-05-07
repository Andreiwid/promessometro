<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Cidade</title>
</head>

<body>        
    <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
            <div style="height: 120px; background-color: #ffffff;">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                                <div class="col-md-1">
                                </div>
                                <div>
                                    <a href="cadastrousuario"><img src="img/1-sel-am.png"></a>
                                    <a href="cadastrocidade"><img src="img/2-vm.png"></a>
                                    <a href="cadastrogestao"><img src="img/3-vm.png"></a>
                                    <a href="cadastrometaacao"><img src="img/4-vm.png"></a>
                                </div>
                            </div>
                        </div>
                <h1 class="h1seguidas">Cadastro de Cidades</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-6" style="border-right: 1px solid rgba(0, 102, 204, 0.8)">    
                         <div class="row acesso" style="margin: 30px;">
                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Portal da Cidade:</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>

                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Área (km²):</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>

                        </div>
                    </div>

                    <div class="col-md-6">    
                     <div class="row acesso" style="margin: 30px;">
                        <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Número de Habitantes:</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>
                    </div>
                </div>
            </div>
        </form>
        <br><br><input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
                            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/meta'"> 
    </div>
</div>
</section>
</body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>