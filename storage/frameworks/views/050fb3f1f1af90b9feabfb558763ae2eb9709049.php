<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Metas e Ações</title>
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
                <h1 class="h1seguidas">Cadastro de Metas</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-6" style="border-right: 1px solid rgba(0, 102, 204, 0.8)">    
                         <div class="row acesso" style="margin: 30px;">
                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Tema:</label>
                            <input type="text" name="option" list="exampleList1" style="margin-right:150px; width:250px; border-radius:5px; border: 1px  #A9A9A9 solid; height: 30px;">
                            <datalist id="exampleList1">
                                <option>Tema A</option>
                                <option >Tema B</option>
                            </datalist>

                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Título:</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>

                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Resumo:</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 80px;"></input>
                        </div>
                        <div class="checkbox" style="float:left; padding-left: 50px;">
                            <label><input type="checkbox" value="">Adicionar mais Metas</label>
                          </div>
                    </div>

                    <div class="col-md-6">    
                     <div class="row acesso" style="margin: 30px;">
                        <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Descrição:</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 80px;"></input>


                        <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">População Beneficiada:</label>
                            <input type="text" name="option" list="exampleList" style="margin-right:150px; width:250px; border-radius:5px; border: 1px  #A9A9A9 solid; height: 30px;">
                            <datalist id="exampleList">
                                <option>Pop A</option>
                                <option >Pop B</option>
                            </datalist>

                            <div>
                            <div class="col-md-6" style="padding:0px">
                                <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Data Início:</label>
                                <form action="action_page.php" style="margin-bottom:200px">
                                    <input type="date" name="DATA_INICIO" style="margin-right:150px; width: 190px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Data Final:</label>
                                <form action="action_page.php" style="margin-bottom:200px">
                                    <input type="date" name="DATA_FIM" style="margin-right:150px; width: 190px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc,rgba(0, 100,230 , 1) , #ccc );">
        </form>

        <h1 class="h1seguidas">Cadastro de Metas</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-6" style="border-right: 1px solid rgba(0, 102, 204, 0.8)">    
                         <div class="row acesso" style="margin: 30px;">
                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Nome:</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>

                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Descrição:</label>
                            <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 80px;"></input>
                        </div>
                        <div class="checkbox" style="float:left; padding-left: 50px;">
                            <label><input type="checkbox" value="">Adicionar mais Ações para essa meta</label>
                          </div>
                    </div>

                    <div class="col-md-6">    
                     <div class="row acesso" style="margin: 30px;">
                        
                            
                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Investimento Previsto:</label>
                            <input type="text" placeholder="R$ 0,00" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>

                            <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Investimento Efetuado:</label>
                            <input type="text" placeholder="R$ 0,00" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>


                            <div>
                            <div class="col-md-6" style="padding:0px">
                                <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Data Início:</label>
                                <form action="action_page.php" style="margin-bottom:200px">
                                    <input type="date" name="DATA_INICIO" style="margin-right:150px; width: 190px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <label style="text-align: left; font-family: agency FB; font-size: 20px; color: rgba(0, 102, 204, 0.8); padding: 10px 0px;">Data Final:</label>
                                <form action="action_page.php" style="margin-bottom:200px">
                                    <input type="date" name="DATA_FIM" style="margin-right:150px; width: 190px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;">
                                </form>
                            </div>
                        </div>
                        
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