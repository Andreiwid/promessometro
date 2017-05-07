<!DOCTYPE html>
<html>
<head>
  <title>Indicador Detalhada</title>
  <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                axisX: 
                {gridColor: "Silver",
                  tickColor: "silver",
                  valueFormatString: "DD/MMM"},
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
                  { x: new Date(2010, 0, 15), y: 200 },
                  { x: new Date(2010, 0, 23), y: 750 },
                  { x: new Date(2010, 4, 5), y: 900 }
                  ]},
                {type: "line",
                  showInLegend: true,
                  name: "Meta",
                  color: "#d62929",
                  lineThickness: 2,
                  dataPoints: [
                  { x: new Date(2010, 0, 1), y: 10 },
                  { x: new Date(2010, 0, 5), y: 50 },
                  { x: new Date(2010, 0, 23), y: 660 }
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
            chart.render();}
    </script>
</head>
<body>        
  <section>
    <div class="middlecenter-cadastra">
      <div class="row">
        <div class="col-md-6">
          <h1 class="subtitulo promeblue"><img src="../img/lupa-yellow.png"> INDICADOR | <?php echo e($page->NOME); ?></h1>
          <h3 class="subtitulo2 promeblue-claro"><?php echo e($tema -> NOME); ?></h3>
          <div class="container">
          <div class="row container">
            <div class="row" id="chartContainer" style="margin: 2%; display: inline-block; width:40em; height: 30em;"></div>
          </div>
          </div>
          <div class="centralizafonte subtitulo3"> A Prefeitura de Campinas NÃO ATENDE a meta deste indicador. </div>
          <div class="centralizafonte subtitulo3"><img style="width: 40px; height: 40px;"src="../img/lupa-yellow.png"> NÃO ATENDE</div>
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
        <div class="row">
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