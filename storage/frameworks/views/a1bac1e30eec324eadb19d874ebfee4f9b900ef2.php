<!DOCTYPE html>
<html>
<head>
  <title>Meta Detalhada</title>

</head>
<body>        
  <section>
    <div class="middlecenter-cadastra">
      <div class="row">
        <div class="col-md-6">
          <h1 class="titulo promeblue">Meta</h1>
          <h2 class="subtitulo promeblue-claro">Nome da Meta</h2>
          <h3 class="subtitulo2 promeblue-claro">Tema</h3>

          <div class="col-md-7">
            <div id="test-circle"></div>
          </div>
          <div class="col-md-5">
            <h1 class="subtitulo2-alignright promeblue">Progresso de conclusao da Meta</h1>
            <h2 class="subtitulo3 promeblue-claro">2 de 4 acoes concluídas</h2>
            <ul class="nostyle-list texto">
              <li><img src="img/lupa-green.png">Ação A</li>
              <li><img src="img/lupa-yellow.png">Ação B</li>
              <li><img src="img/lupa-yellow.png">Ação C</li>
              <li><img src="img/lupa-red.png">Ação D</li>
            </ul>

            <button class="btn btn-info btn-lg">Seguir Meta</button>
          </div>

          <div class="col-md-12">
            <hr class="gradient-line">
          </div>
        </div>
        <div class="col-md-6">
          <div class="selecao-tema">
            <li>Selecione o tema desejado:
              <input class="inputnormal-color-bg" type="text" name="option" list="exampleList"></li>
              <datalist id="exampleList">
                <option>Saude</option>
                <option >Educacao</option>
                <option >Seguranca</option>
                <option >Lazer</option>
              </datalist>
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
                    <img src="img/carouselEX.png" style="margin-left:100px; margin-bottom:50px">
                  </div>

                  <div class="item">
                    <img src="img/carouselEX.png" style="margin-left:100px; margin-bottom:50px">
                  </div>

                  <div class="item">
                    <img src="img/carouselEX.png" style="margin-left:100px; margin-bottom:50px" >
                  </div>

                  <div class="item">
                    <img src="img/carouselEX.png" style="margin-left:100px; margin-bottom:50px">
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
          <div class="col-md-6">
            <h1 class="subtitulo subtitulo-barra promeblue"> Ações da Meta:</h1>
            <div class="accordions">
              <div class="accordion-item">
                <input type="checkbox" name="accordion" id="accordion-1" />
                <label for= "accordion-1"><h3 class="subtitulo2 promeblue-claro">Ação A</h3></label>
                <P class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula augue ac egestas ornare. 
                  Nulla sollicitudin porttitor tempus. Integer bibendum dolor et justo finibus, ut condimentum nunc pharetra.</P>
                  <div class="accordion-content">
                    <div class="col-md-12 centralizafonte">
                      <div class="col-md-2" >
                        <P class="subtitulo3 promeblue">Status</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo3 promeblue">%</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo3 promeblue">Responsavel</P>
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
                        <P class="texto">EDP</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">100%</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">Prefeito com Governador</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">1º semestre de 20xx</P>
                      </div>
                      <div class="col-md-4">
                        <P class="texto">blablablaorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula augue ac egestas ornare. 
                  Nulla sollicitudin porttitor tempus. Integer bibendum dolor et justo finibus, ut condimentum nunc pharetra</P>
                      </div>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="gradient-line">
          <div class="row">
            <div class="col-md-12">
              <h1 class="subtitulo subtitulo-barra promeblue">De olho no Promessometro</h1>
              <p class="texto">Registre aqui seu comentario, critica e sugestao para melhorar a gestao municipal</p>
            </div>
            <div class="col-md-6">
              <hr class="gradient-line">
              <h4 class="subtitulo2">Comentarios:</h4>
              <hr class="gradient-line">
              <div class="semcomentario">
                <p class="texto">Nenhum comentario encontrado</p>
                </div>
              <hr class="gradient-line">
              <img src="img/comment.png">
              <input class="inputtext" placeholder="Escreva aqui seu comentario">
            </div>
          </div>  
        </div>
      </section>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>
        $( document ).ready(function() {
          $("#test-circle").circliful({
            animation: 1,
            animationStep: 3,
            foregroundBorderWidth: 15,
            backgroundBorderWidth: 15,
            percent: 42
          });
        });
      </script>
    </body>
    </html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>