<?php
  session_start();
 ?>



<!DOCTYPE html>
<html>
<head>
  <title>Indicador Detalhada</title>
  <fieldset id="list-of-dates">
  <?php /**/ $contador = 0 /**/ ?>
    <?php foreach($pci as $prestconta): ?>
      <?php if($prestconta->ID_INDICADOR == $page->ID_INDICADOR): ?>
      <input id="ANO<?php echo e($contador); ?>" type="hidden" value = "<?php echo e(date('Y', strtotime($prestconta->DATA_REFERENCIA))); ?>"/>
      <input id="MES<?php echo e($contador); ?>" type="hidden" value = "<?php echo e(date('m', strtotime($prestconta->DATA_REFERENCIA))); ?>"/>
      <input id="DIA<?php echo e($contador); ?>" type="hidden" value = "<?php echo e(date('d', strtotime($prestconta->DATA_REFERENCIA))); ?>"/>
      <input id="VALOR<?php echo e($contador); ?>" type="hidden" value = "<?php echo e($prestconta->VALOR); ?>"/>
      <?php /**/ $contador = $contador + 1 /**/ ?>
      <?php endif; ?>
    <?php endforeach; ?>
    <?php /**/ $porcentagemindicador = 0 /**/ ?>
  </fieldset>

  <script>
        window.onload = function () {
          var contador = <?php echo e($contador); ?>;
          var valor = [];
          var ano = [];
          var mes = [];
          var dia = [];
          for (i = 0; i<contador; i++){
            ano[i] = document.getElementById("ANO"+i).value;
            mes[i] = document.getElementById("MES"+i).value;
            dia[i] = document.getElementById("DIA"+i).value;
            
              if(typeof document.getElementById("VALOR"+i).value === 'undefined'){
                valor.push(null);
              }else{
                valor.push(parseInt(document.getElementById("VALOR"+i).value));
              }
          }

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                axisX: 
                {gridColor: "Silver",
                  tickColor: "silver",
                  valueFormatString: "YYYY"},
                toolTip: 
                {shared: true},
                axisY: 
                {gridColor: "Silver",
                  tickColor: "silver"},
                legend: 
                {verticalAlign: "center",
                  horizontalAlign: "right"},
                data: [
                {type: "line",
                  showInLegend: true,
                  lineThickness: 2,
                  name: "Valor Declarado",
                  markerType: "square",
                  color: "rgba(0, 102, 204, 0.8)",
                  dataPoints: [
                  <?php foreach($pci as $prestconta): ?>
                    <?php if($prestconta->ID_INDICADOR == $page->ID_INDICADOR): ?>
                    {},
                    <?php endif; ?>
                  <?php endforeach; ?>]},
                {type: "line",
                  showInLegend: true,
                  name: "Meta",
                  color: "#d62929",
                  lineThickness: 2,
                  dataPoints: [
                  <?php foreach($pci as $prestconta): ?>
                    <?php if($prestconta->ID_INDICADOR == $page->ID_INDICADOR): ?>
                    {},
                    <?php endif; ?>
                  <?php endforeach; ?>
                  ]}],
                legend: 
                {cursor: "pointer",
                  itemclick: function (e) {
                  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                      }
                  else {
                        e.dataSeries.visible = true;
                      }
                        chart.render();
                    }}});

           for (j = 0; j < contador; j++){
             chart.options.data["0"].dataPoints[j].x = new Date(ano[j], mes[j]-1, dia[j]);
             chart.options.data["0"].dataPoints[j].y = valor[j];
             chart.options.data["1"].dataPoints[j].x = new Date(ano[j], mes[j]-1, dia[j]);
             chart.options.data["1"].dataPoints[j].y = <?php echo e($page->VALOR_META); ?>;
             }

            chart.render();}

    </script>
</head>
<body>        
  <section>
  
    <div class="middlecenter-cadastra">
      <div class="row">
        <div class="col-md-6">
          <h3 class="subtitulo2 promeblue-claro"><?php echo e($tema -> NOME); ?></h3>
          <h1 class="subtitulo promeblue"><?php if($pciporcentagem->PERCENTUAL_INDICADOR <1): ?><img src="../img/vermelha.png">
                      <?php elseif($pciporcentagem->PERCENTUAL_INDICADOR >= 1 && $pciporcentagem->PERCENTUAL_INDICADOR < 100): ?><img src="../img/amarela.png">
                      <?php else: ?><img src="../img/verde.png">
                      <?php endif; ?> INDICADOR | <?php echo e($page->NOME); ?></h1>
          <div class="container">
          <div class="row container">
            <div class="row" id="chartContainer" style="margin: 2%; display: inline-block; width:40em; height: 30em;"></div>
          </div>
          </div>
          <div class="col-md-12">
            <hr class="gradient-line">
          </div>
        </div>
        <div class="col-md-6">
          <div class="selecao-tema">
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
        <div class="col-md-12">
          <div class="col-md-12">
            <h1 class="subtitulo subtitulo-barra promeblue">De olho no Promessometro</h1>
            <p class="texto">Registre aqui seu comentário, critica e sugestao para melhorar a gestao municipal</p>
          </div>
          <div class="col-md-6">
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
      </div>
    </section>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>