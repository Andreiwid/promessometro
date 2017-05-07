<!DOCTYPE html>
<html>
<head>
    <title>Validação de Cadastro</title>
</head>

<body>        
    <div class="cadastra-stepline">
        <div class="formatacao-telas-cadastro">
            <div style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                <div class="col-md-2">
                </div>
                <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                    <div class="col-md-1">
                    </div>
                    <div>
                        <a href="cadastro"><img src="img/1-sel-am.png"></a>
                        <a href="cadastro"><img src="img/2-vm.png"></a>
                        <a href="cadastro"><img src="img/3-vm.png"></a>
                        <a href="cadastro"><img src="img/4-vm.png"></a>
                    </div>
                </div>
            </div>                   
            <div class="container">
                <div class="col-md-2"></div>
                <div class="col-md-8 major-box-validation">
                    <div class="col-md-3">
                        <span class="glyphicon glyphicon-check centralizafonte glyphicon-validation"></span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 minor-box-validation">
                        <P class="subtitulo3-validation centralizafonte">Cadastro efetuado com sucesso!</P>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-9">
                        <P class="texto-validation centralizafonte">
                            Uma mensagem de confirmação foi enviada para o seu email.</p>
                            <P class="texto-validation centralizafonte">Suas informações foram enviadas
                               para a nossa central para serem avaliadas e dispostas no site!</P> 
                           </div>
                       </div>
                       <div class="col-md-2"></div>
                   </div>
               </div>
           </div>
       </body>
       </html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>