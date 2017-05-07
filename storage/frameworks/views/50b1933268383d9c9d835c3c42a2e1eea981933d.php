<!DOCTYPE html>
<html>
<head>

<?php /**/$percentual_meta_total = 0/**/ ?>
        <?php /**/ $total = 0/**/ ?>
        <?php /**/ $contaux=0/**/ ?>
        <?php foreach($acao as $auxacao): ?>
                  <?php /**/ $percentual = 0 /**/ ?>
                  <?php /**/ $percentual1_acao = 0 /**/ ?>
                  <?php /**/ $percentual2_acao = 0 /**/ ?>
                  <?php /**/ $contador = 0 /**/ ?>
                  <?php foreach($pca as $pcaaux0): ?>
                    <?php if($pcaaux0->ID_ACAO == $auxacao->ID_ACAO): ?>
                    <?php /**/ $percentual1_acao = $pcaaux0->PERCENTUAL_ACAO /**/ ?>
                    <?php /**/ $contador++ /**/ ?>
                    <?php /**/ $percentual2_acao = $percentual2_acao + $percentual1_acao /**/ ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                  <?php if($contador < 1): ?>
                  <?php /**/ $contador = 1 /**/ ?>
                  <?php endif; ?>
                  <?php /**/ $percentual = $percentual + ($percentual2_acao / $contador) /**/ ?>
                  <?php /**/$total = $total + $percentual/**/ ?>
                  <?php /**/$contaux++ /**/ ?>
        <?php endforeach; ?>
<?php /**/$percentual_meta_total = $total / $contaux/**/ ?>

  <title>Meta Detalhada</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>
        $( document ).ready(function() {
          $("#testcircle").circliful({
            animation: 1,
            animationStep: 3,
            foregroundBorderWidth: 15,
            backgroundBorderWidth: 15,
            percent: '<?php echo e($percentual_meta_total); ?>'
          });
        });
      </script>
</head>
<body>        
  <section>
    <div class="middlecenter-cadastra">
      <div class="row">
        <div class="col-md-6">
        <input type = "hidden" name="ID_META" value="<?php echo e($page->ID_META); ?>">
        
          <h1 class="subtitulo promeblue"><img src="../img/lupa-yellow.png"> META | <?php echo e($page->DESCRICAO); ?></h1>
          <h3 class="subtitulo2 promeblue-claro"><?php echo e($tema -> NOME); ?></h3>
          <div class="col-md-10">
            <div id="testcircle"></div>
          </div>
            <button class="pull-left btn btn-info btn-lg">Seguir Meta</button>
        </div>
        <div class="col-md-6">
          <div class="selecao-tema">
            <li>Selecione o tema desejado:
              <input class="inputnormal-color-bg input" type="text" name="option" list="exampleList"></li>
              <datalist id="exampleList">
                <?php foreach($procuratema as $auxtema): ?>
                <option><?php echo e($auxtema-> NOME); ?></option>
                <?php endforeach; ?>
              </datalist>
              <button class="btn btn-info">Procurar</button>
            </div>
            <div class="col-md-12">
              <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:50px; height:350px">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="../img/carouselEX.png" style="margin-left:100px; margin-bottom:50px">
                  </div>

                  <div class="item">
                    <img src="../img/carouselEX.png" style="margin-left:100px; margin-bottom:50px">
                  </div>

                  <div class="item">
                    <img src="../img/carouselEX.png" style="margin-left:100px; margin-bottom:50px" >
                  </div>

                  <div class="item">
                    <img src="../img/carouselEX.png" style="margin-left:100px; margin-bottom:50px">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div >
          </div>
        </div>
        <hr class="gradient-line">
        <div class="row">
          <div class="col-md-6">
            <?php /**/ $contadoracaocompleta = 0 /**/ ?>
            <?php foreach($acao as $auxacao): ?>
                  <?php /**/ $percentual_acao = 0 /**/ ?>
                  <?php /**/ $contadoracao = 0 /**/ ?>
                  <?php foreach($pca as $pcaaux1): ?>
                  <?php /**/ $percentual_aux = $pcaaux1->PERCENTUAL_ACAO /**/ ?>
                    <?php if($pcaaux1->ID_ACAO == $auxacao->ID_ACAO): ?>
                    <?php /**/ $percentual_acao = $percentual_acao + $pcaaux1->PERCENTUAL_ACAO /**/ ?>
                    <?php /**/ $contadoracao++ /**/ ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                    <?php if($contadoracao < 1): ?>
                    <?php /**/ $contadoracao = 1 /**/ ?>
                    <?php endif; ?>
                  <?php /**/ $percentual_acao_final = $percentual_acao / $contadoracao /**/ ?>
                  <?php if($percentual_acao_final > 99): ?>
                    <?php /**/ $contadoracaocompleta++ /**/ ?>
                  <?php endif; ?>
            <?php endforeach; ?>
            <h1 class="subtitulo subtitulo-barra promeblue"> <?php echo e($contadoracaocompleta); ?> de <?php echo e($contadoracoes); ?> ações da Meta:</h1>
            <div class="accordions">
           <?php foreach( $acao as $auxacao): ?>
              <div class="accordion-item">
                <input type="checkbox" name="accordion" id="accordion-<?php echo e($auxacao->ID_ACAO); ?>" />
                  <?php /**/ $percentual_acao = 0 /**/ ?>
                  <?php /**/ $contadoracao = 0 /**/ ?>
                  <?php foreach($pca as $pcaaux2): ?>
                    <?php /**/ $percentual_aux = $pcaaux2->PERCENTUAL_ACAO /**/ ?>
                    <?php if($pcaaux2->ID_ACAO == $auxacao->ID_ACAO): ?>
                    <?php /**/ $percentual_acao = $percentual_acao + $pcaaux2->PERCENTUAL_ACAO /**/ ?>
                    <?php /**/ $contadoracao++ /**/ ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                    <?php if($contadoracao < 1): ?>
                    <?php /**/ $contadoracao = 1 /**/ ?>
                    <?php endif; ?>
                  <?php /**/ $percentual_acao_final = $percentual_acao / $contadoracao /**/ ?>

                  <label for= "accordion-<?php echo e($auxacao->ID_ACAO); ?>"><h3 class="subtitulo2 promeblue-claro">
                  <?php if($percentual_acao_final > 0 && $percentual_acao_final < 100): ?>
                  <img src="../img/Lupa-PDP.png"> 
                  <?php elseif($percentual_acao_final > 99): ?>
                  <img src="../img/Lupa-EDP.png"> 
                  <?php elseif($percentual_acao_final < 1): ?>
                  <img src="../img/Lupa-AFP.png"> 
                  <?php endif; ?>
                  
                  <?php echo e(number_format(($percentual_acao_final), 0)); ?> % | <?php echo e($auxacao->DESCRICAO); ?></h3></label>
                  <div class="accordion-content">
                    <div class="col-md-12 justificafonte">
                      <div class="col-md-2" >
                        <P class="subtitulo3 promeblue">Responsável</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo3 promeblue">Investimento Previsto</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo3 promeblue">Investimento Executado</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo3 promeblue">Prazo</P>
                      </div>
                      <div class="col-md-4" >
                        <P class="subtitulo3 promeblue">Prefeitura prestacao de contas 20xx-20xx</P>
                      </div>
                    </div>
                    <div class="col-md-12 justificafonte" >
                      <hr class="gradient-line">
                      <div class="col-md-2" >
                        <P class="texto">TESTE</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">R$ <?php echo e($auxacao->INVESTIMENTO_PREVISTO); ?></P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">R$ <?php echo e($auxacao->INVESTIMENTO_EXECUTADO); ?></P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto"><?php echo e($auxacao->DATA_FIM); ?></P>
                      </div>
                      <div class="col-md-4">
                      <?php foreach($pca as $pcaaux3): ?>
                        <?php if($pcaaux3->ID_ACAO == $auxacao->ID_ACAO): ?>
                          <P class="texto"><?php echo e($pcaaux3->DATA_REFERENCIA); ?>: <?php echo e($pcaaux3->CONSIDERACAO); ?></P>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </div>
                      <hr>
                    </div>
                  </div>
                 <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h1 class="subtitulo subtitulo-barra promeblue">De olho no Promessometro</h1>
              <p class="texto">Registre aqui seu comentário, critica e sugestao para melhorar a gestao municipal</p>
            </div>
              <hr class="gradient-line">
              <h4 class="subtitulo2">Comentários:</h4>
              <hr class="gradient-line">
              <div class="semcomentario">
                <p class="texto">Nenhum comentário encontrado</p>
                </div>
              <hr class="gradient-line">
                <img src="../img/comment.png">
                <textarea class="inputtext input" placeholder="Escreva aqui seu comentário"></textarea>
          </div>  
        </div>
      </section>
    </body>
    </html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>