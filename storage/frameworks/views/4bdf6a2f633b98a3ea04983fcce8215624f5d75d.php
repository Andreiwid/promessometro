<!DOCTYPE html>
<html>
<head>
  <title>Meta Page</title>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    $( document ).ready(function() {
      $("#test-circle").circliful({
        animation: 1,
        animationStep: 3,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 42,
      });
    });
  </script>
</head>
<body>
  <section>
    <div class="middlecenter-cadastra">
      <h1 class="titulo promeblue">TEMA | <?php echo e($tema->NOME); ?></h1>
      <div class="subtitulo2 promeblue-claro">Cidade atual: Campinas
      </div>
      <div class="container">
        <div class="col-md-12">
          <div class="col-md-6 rightline">
            <div class="col-md-12 margin-tmi" style="height: 350px;">
              <div class="col-md-7">
                <div class="subtitulo promeblue-claro">Metas
                </div>
                <div id="test-circle"></div>
              </div>
              <div class="col-md-5 subtitulo3 promeblue-claro">
                <font>42 de 100 metas concluidas</font>
              </div>
            </div>
            <button class=" btn btn-primary btn-sm subtitulo2" style="color: white; display:block; clear: both">Ver Meta</button>
          </div>
          <div class="col-md-6 p-fifty">
            <div class="col-md-12 margin-tmi" style="height: 350px;">
              <div class="col-md-7">
                <div class="subtitulo promeblue-claro">Indicadores
                </div>
                <div class="row">
                  <div class="p-m-null" id="myfirstchart" style="height: 250px; width: 300px;"></div>
                </div>
              </div>
              <div class="col-md-5 subtitulo3 promeblue-claro">
                <font>42 de 100 indicadores satisfeitos</font>
              </div>
            </div>
            <button class=" btn btn-primary btn-sm subtitulo2" style="color: white; display:block; clear: both">Ver Indicador</button>
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
                <label for= "accordion-1"><font class="subtitulo2 promeblue">Clique aqui para ver mais metas</font></label>
                <div class="accordion-content">
                  <div class="row col-md-6">
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
                      <?php if($percentual_meta_total > 0 && $percentual_meta_total < 100): ?>
                      <img src="../img/Lupa-PDP.png"> 
                      <?php elseif($percentual_meta_total > 99): ?>
                      <img src="../img/Lupa-EDP.png"> 
                      <?php elseif($percentual_meta_total < 1): ?>
                      <img src="../img/Lupa-AFP.png"> 
                      <?php endif; ?>
                    </div>
                    <div class="col-md-3" >
                      <P class="subtitulo3 promeblue-claro"><?php echo e(number_format(($percentual_meta_total), 0)); ?> %</P>
                    </div>
                    <div class="col-md-7" >
                      <P class="subtitulo3 promeblue-claro"><?php echo e($auxmeta->DESCRICAO); ?></P>
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
                <label for= "accordion-2"><font class="subtitulo2 promeblue">Clique aqui para ver mais indicadores</font></label>
                <div class="accordion-content">
                  <div class="col-md-6" >
                    <hr class="gradient-line">
                    <div class="col-md-2" >
                      <img src="img/lupa-red.png">
                    </div>
                    <div class="col-md-2" >
                      <P class="texto promeblue-claro">10%</P>
                    </div>
                    <div class="col-md-8" >
                      <P class="texto promeblue-claro">Habitantes Atendidos Por Mes.</P>
                    </div>
                    <hr>
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

  <script type="text/javascript">
    new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
  { year: '2008', value: 20 },
  { year: '2009', value: 10 },
  { year: '2010', value: 5 },
  { year: '2011', value: 5 },
  { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>