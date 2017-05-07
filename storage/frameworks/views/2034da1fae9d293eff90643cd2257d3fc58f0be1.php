<!DOCTYPE html>
<html>
<head>

  <?php /**/$percentual_meta_cidade = 0/**/ ?>
  <?php /**/ $totalcity = 0/**/ ?>
  <?php /**/ $contacity = 0 /**/ ?>
  <?php foreach($gestao as $auxgestao): ?>
      <?php if($auxgestao->ID_CIDADE === $cidade->ID_CIDADE): ?>
        <?php foreach($meta as $auxmeta): ?>
         <?php if($auxmeta->ID_GESTAO===$auxgestao->ID_GESTAO): ?>
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
            <?php /**/$totalcity = $totalcity + $percentual_meta_total/**/ ?>
            <?php /**/$contacity++ /**/ ?>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    <?php endforeach; ?>
    <?php if($contacity < 1): ?>
      <?php /**/ $contacity = 1 /**/ ?>
    <?php endif; ?>
    <?php /**/ $percentual_meta_cidade = $totalcity / $contacity /**/ ?>
  

  <title>Seleção de Tema</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    $( document ).ready(function() {
      $("#test-circle").circliful({
        animation: 1,
        animationStep: 3,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: '<?php echo e($percentual_meta_cidade); ?>'
      });
    });
  </script>

  <script>
    $( document ).ready(function() {
      $("#test-circle1").circliful({
        animation: 1,
        animationStep: 3,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 1  
      });
    });
  </script>

  <script>
    $( document ).ready(function() {
      $("#test-circle2").circliful({
        animation: 1,
        animationStep: 3,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 90
      });
    });
  </script>


</head>
<body>        
  <section>
    <div class="middlecenter-cadastra">
      <div class="row">
        <div class="col-md-12">

          <div class="col-md-4">
            <div id="test-circle">
              <label class="subtitulo promeblue centralizafonte graph-city">Porcentagem da Cidade</label>
            </div>
          </div>

          <div class="col-md-2">
            <div id="test-circle1">
              <label class="subtitulo3 promeblue graph-goalind">Metas</label>
            </div>
          </div>

          <div class="col-md-2">
            <div id="test-circle2">
              <label class="subtitulo3 promeblue graph-goalind">Indicadores</label>
            </div>
          </div>

          <div class="col-md-4">
            <div style ="padding-top:75px">
              <label class="subtitulo2 promeblue-claro centralizafonte"><?php echo e($cidade->NOME); ?></label>
              <label class="subtitulo2 promeblue-claro centralizafonte"><?php echo e($cidade->POPULACAO); ?> Habitantes</label>
              <label class="subtitulo2 promeblue-claro centralizafonte"><?php echo e($cidade->AREAK2); ?> km²</label>
              <label class="subtitulo2 promeblue-claro centralizafonte">Nome do Prefeito</label>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h1 class="titulo promeblue">Tema</h1>       
        </div>
        <div class="col-md-12">

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Saúde</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-plus glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Educação</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-education glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Cultura</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-knight glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Segurança</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-lock glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Cidadania</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-comment glyphicon-theme "></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Lazer</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-music glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Acessibilidade</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-sunglasses glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Dev. Cidade</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-signal glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Habitação</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-home glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Infraestrutura</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-stats glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Serviços Técnicos</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-wrench glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Turismo</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-plane glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Serviços Públicos</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-paperclip glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Trabalho e Renda</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-briefcase glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Abastecimento</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-scale glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Urbanismo</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-time glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Água/Saneamento</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-tint glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Sustentabilidade</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-leaf glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Dev. Urbano</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-fullscreen glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Administração</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-list-alt glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Gestão e Controle</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-object-align-right glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >R.Humanos</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-user glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Finanças</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-piggy-bank glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Jurisdição</P>
            <button class="button-theme">
              <span class="glyphicon glyphicon-plus glyphicon-theme"></span>
            </button>
          </div>
        </div>
      </div>  
    </div>
  </section>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>