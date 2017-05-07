<?php
   session_start();
?>



<!DOCTYPE html>
<html>
<head>
  <title>Meta Page</title>
</head>
<body>
  <section>
    <div class="middlecenter-cadastra">
      <h1 class="titulo promeblue">TEMA | <?php echo e($tema->NOME); ?></h1>
      <div class="subtitulo2 promeblue-claro">Cidade atual: <?php echo e($cidade->NOME); ?>

      </div>
      <div class="container">
        <div class="col-md-12">
          <div class="col-md-6 rightline">
            <div class="col-md-12 margin-tmi" style="height: 350px;">
              <div class="col-md-7">
                <div class="subtitulo promeblue-claro">Metas
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 p-fifty">
            <div class="col-md-12 margin-tmi" style="height: 350px;">
              <div class="col-md-7">
                <div class="subtitulo promeblue-claro">Indicadores
                </div>
                <div class="row">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="gradient-line">
      <div class="container">
        <div class="col-md-12">
          <div class="col-md-6 rightline">
            <div class="accordions">
              <div class="accordion-item">
                <input type="checkbox" name="accordion" id="accordion-1" />
                <label for= "accordion-1"><font class="btn btn-primary btn-sm subtitulo3" style="color: white; display:block; clear: both">Ver Metas</font></label>
                <div class="accordion-content">
                  <div class="row col-md-6">
                  <hr class="gradient-line">
                  <?php foreach($meta as $auxmeta): ?>
                          <?php /**/$percentual_meta_total = 0/**/ ?>
                          <?php /**/ $total = 0/**/ ?>
                          <?php /**/ $contaux=0/**/ ?>
                          <?php foreach($acao as $auxacao): ?>
                          <?php if($auxacao->ID_META === $auxmeta->ID_META): ?>
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
                          <?php endif; ?>
                          <?php endforeach; ?>
                          <?php if($contaux < 1): ?>
                            <?php /**/ $contaux = 1 /**/ ?>
                          <?php endif; ?>
                    <?php /**/$percentual_meta_total = $total / $contaux/**/ ?>

                    <div class="col-md-2" >
                      <?php if($percentual_meta_total <1): ?><img src="<?php echo url('/img/vermelha.png') ?>">
                      <?php elseif($percentual_meta_total >= 1 && $percentual_meta_total < 100): ?><img src="<?php echo url('/img/amarela.png') ?>">
                      <?php else: ?><img src="<?php echo url('/img/verde.png') ?>">
                      <?php endif; ?> 
                    </div>
                    <div class="col-md-3" >
                      <P class="subtitulo3 promeblue-claro"><?php echo e($percentual_meta_total); ?> %</P>
                    </div>
                    <div class="col-md-7" >
                      <a onclick="javascript:location.href='/public/detalhemeta/<?php echo e($auxmeta->ID_META); ?>'">
                      <P class="subtitulo3 promeblue-claro"><?php echo e($auxmeta->DESCRICAO); ?></P>
                      </a>
                    </div>
                  <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordions">
              <div class="accordion-item">
                <input type="checkbox" name="accordion" id="accordion-2" />
                <label for= "accordion-2"><font class="btn btn-primary btn-sm subtitulo3" style="color: white; display:block; clear: both">Ver Indicadores</font></label>
                <div class="accordion-content">
                  <div class="col-md-6" >
                  <hr class="gradient-line">
                  <?php foreach($indicador as $auxindicador): ?>
                    <div class="col-md-7" >
                      <a onclick="javascript:location.href='/public/detalheindicador/<?php echo e($auxindicador->ID_INDICADOR); ?>'">
                      <P class="subtitulo3 promeblue-claro"><?php echo e($auxindicador->NOME); ?></P>
                      </a>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
  </section>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>