<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO METAS</title>
        
    </head>  
    <body>
    <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                <h1 class="h1seguidas">Cadastro de Metas</h1><br><br>
                    <h4 style="color:rgba(0, 102, 204, 0.8); font-family:arial black; text-align:left; padding-left:50px">Informacoes da Meta</h4>
                    <form action = "cadastrar" method="post">
                        <div class="container">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-6" style="border-right: 1px solid rgba(0, 102, 204, 0.8)">    
                            <li style="text-align: left; padding:10px;">Objetivo</li>
                            <input type="text" name="OBJETIVO" style="width:450px; margin-right:150px; height:75px; border-radius:5px"></input><br>

                            <li style="text-align: left; padding:10px;">Resumo</li>
                            <input type="text" name="RESUMO" style="width:450px; margin-right:150px; height:75px; border-radius:5px"></input><br>

                            <li style="text-align: left; padding:10px;">Descrição</li>
                            <input type="text" name="DESCRICAO" style="width:450px; margin-right:150px; height:75px; border-radius:5px"></input><br>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-6">
                                <li style="text-align: left; padding:10px;">ID Tema <a href="#" data-toggle="tooltip" title="Tema o qual a Meta se aplica" style="padding-left:150px">?</a>
                                </li>
                                <input type="text" name="ID_TEMA" style="margin-right:150px; width:250px; border-radius:5px"></input>

                                <br><br>
                                <li style="text-align: left; padding:10px;">ID Pop Beneficiada <a href="#" data-toggle="tooltip" title="Publico alvo da Meta" style="padding-left:80px">?</a>
                                </li>
                                <select name="ID_POP_BENEFICIADA" style="margin-right:150px; width:250px; border-radius:5px">
                                    <?php foreach($popbeneficiada as $aux): ?> 
                                        <option value='<?php echo e($aux->ID_POP_BENEFICIADA); ?>'><?php echo e($aux->TITULO); ?></option>
                                    <?php endforeach; ?>
                                </select>

                                
                            </div>

                            <div class="col-md-6">
                                <li style="text-align: left; padding:10px;">Status Meta</li>
                                <input type="text" name="STATUS_META" style="margin-right:150px; width:250px; border-radius:5px"></input><br>
                                
                                <br>
                                <li style="text-align: left; padding:10px;">ID Gestão <a href="#" data-toggle="tooltip" title="Responsavel pela Gestao da Meta" style="padding-left:130px">?</a></li>
                                <input type="text" name="ID_GESTAO" style="margin-right:150px; width:250px; border-radius:5px"></input><br>
                            </div>
                        <div>
                            <div class="col-md-6">
                            <li style="text-align: left; padding:10px;">Data Início</li>
                                <form action="action_page.php" style="margin-bottom:200px">
                                    <input type="date" name="DATA_INICIO" style="margin-right:150px; width:250px; border-radius:5px">
                                </form>
                            </div>
                            <div class="col-md-6">
                            <li style="text-align: left; padding:10px;">Data Fim</li>
                                <form action="action_page.php" style="margin-bottom:200px">
                                    <input type="date" name="DATA_FIM" style="margin-right:150px; width:250px; border-radius:5px">
                                </form>
                            </div>
                        </div>
                        </div>
                    </form>
                            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
                            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/meta'"> 
                </div>
            </div>
        </section>
    </body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>