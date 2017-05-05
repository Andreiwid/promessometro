@extends ('navbar')

<!DOCTYPE html>
<html>
<head>

{{--*/$percentual_meta_total = 0/*--}}
        {{--*/ $total = 0/*--}}
        {{--*/ $contaux=0/*--}}
        @foreach ($acao as $auxacao)
                  {{--*/ $percentual = 0 /*--}}
                  {{--*/ $percentual1_acao = 0 /*--}}
                  {{--*/ $percentual2_acao = 0 /*--}}
                  {{--*/ $contador = 0 /*--}}
                  @foreach ($pca as $pcaaux0)
                    @if ($pcaaux0->ID_ACAO == $auxacao->ID_ACAO)
                    {{--*/ $percentual1_acao = $pcaaux0->PERCENTUAL_ACAO /*--}}
                    {{--*/ $contador++ /*--}}
                    {{--*/ $percentual2_acao = $percentual2_acao + $percentual1_acao /*--}}
                    @endif
                  @endforeach
                  @if ($contador < 1)
                  {{--*/ $contador = 1 /*--}}
                  @endif
                  {{--*/ $percentual = $percentual + ($percentual2_acao / $contador) /*--}}
                  {{--*/$total = $total + $percentual/*--}}
                  {{--*/$contaux++ /*--}}
        @endforeach
{{--*/$percentual_meta_total = $total / $contaux/*--}}


{{--*/ $contadoracaocompleta = 0 /*--}}
            @foreach ($acao as $auxacao)
                  {{--*/ $percentual_acao = 0 /*--}}
                  {{--*/ $contadoracao = 0 /*--}}
                  @foreach ($pca as $pcaaux1)
                  {{--*/ $percentual_aux = $pcaaux1->PERCENTUAL_ACAO /*--}}
                    @if ($pcaaux1->ID_ACAO == $auxacao->ID_ACAO)
                    {{--*/ $percentual_acao = $percentual_acao + $pcaaux1->PERCENTUAL_ACAO /*--}}
                    {{--*/ $contadoracao++ /*--}}
                    @endif
                  @endforeach
                    @if ($contadoracao < 1)
                    {{--*/ $contadoracao = 1 /*--}}
                    @endif
                  {{--*/ $percentual_acao_final = $percentual_acao / $contadoracao /*--}}
                  @if($percentual_acao_final > 99)
                    {{--*/ $contadoracaocompleta++ /*--}}
                  @endif
            @endforeach

  <title>Meta Detalhada</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>
        $( document ).ready(function() {
          $("#testcircle").circliful({
            animation: 1,
            animationStep: 3,
            foregroundBorderWidth: 15,
            backgroundBorderWidth: 15,
            percent: '{{$percentual_meta_total}}'
          });
        });
      </script>
</head>
<body>        
  <section>
    <div class="middlecenter-cadastra">
      <div class="row">
        <div class="col-md-6">
        <input type = "hidden" name="ID_META" value="{{ $page->ID_META }}">
        
          <h3 class="subtitulo2 promeblue-claro">{{ $tema -> NOME}}</h3>
          <h1 class="subtitulo promeblue">@if($percentual_meta_total <1)<img src="../img/vermelha.png">
										  @elseif($percentual_meta_total >= 1 && $percentual_meta_total < 100)<img src="../img/amarela.png">
											@else<img src="../img/verde.png">
										  @endif 
										  META | {{ $page->DESCRICAO}}</h1>
          <div class="col-md-10">
            <div id="testcircle"></div>
          </div>
           
		      @if($row == 0 )
            <form action= "{{ $page->ID_META }}/SeguirMeta" method="post" name="form_follow">

              <a href="detalhemeta/{ID_META}"><button TYPE="submit" class="pull-left btn btn-info btn-lg">Seguir Meta</button></a>
              
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          @elseif ($row > 0)
            <form action= "{{ $page->ID_META }}/DeixaSeguir" method="post" name="form_unfollow">
              <button TYPE="submit" class="pull-left btn btn-info btn-lg">Unfollow</button>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

          @endif
        </div>
        <div class="col-md-6">
          <div class="selecao-tema">
            <li>Selecione o tema desejado:
              <input class="inputnormal-color-bg input" type="text" name="option" list="exampleList"></li>
              <datalist id="exampleList">
                @foreach ($procuratema as $auxtema)
                <option>{{ $auxtema-> NOME }}</option>
                @endforeach
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
        <div class="row" >
          <div class="col-md-6">
            {{--*/ $contadoracaocompleta = 0 /*--}}
            @foreach ($acao as $auxacao)
                  {{--*/ $percentual_acao = 0 /*--}}
                  {{--*/ $contadoracao = 0 /*--}}
                  @foreach ($pca as $pcaaux1)
                  {{--*/ $percentual_aux = $pcaaux1->PERCENTUAL_ACAO /*--}}
                    @if ($pcaaux1->ID_ACAO == $auxacao->ID_ACAO)
                    {{--*/ $percentual_acao = $percentual_acao + $pcaaux1->PERCENTUAL_ACAO /*--}}
                    {{--*/ $contadoracao++ /*--}}
                    @endif
                  @endforeach
                    @if ($contadoracao < 1)
                    {{--*/ $contadoracao = 1 /*--}}
                    @endif
                  {{--*/ $percentual_acao_final = $percentual_acao / $contadoracao /*--}}
                  @if($percentual_acao_final > 99)
                    {{--*/ $contadoracaocompleta++ /*--}}
                  @endif
            @endforeach
            <h1 class="subtitulo subtitulo-barra promeblue"> {{ $contadoracaocompleta }} de {{ $acaocount }} ações da Meta:</h1>
            <div class="accordions">
           @foreach ( $acao as $auxacao)
              <div class="accordion-item">
                <input type="checkbox" name="accordion" id="accordion-{{ $auxacao->ID_ACAO }}" />
                  {{--*/ $percentual_acao = 0 /*--}}
                  {{--*/ $contadoracao = 0 /*--}}
                  @foreach ($pca as $pcaaux2)
                    {{--*/ $percentual_aux = $pcaaux2->PERCENTUAL_ACAO /*--}}
                    @if ($pcaaux2->ID_ACAO == $auxacao->ID_ACAO)
                    {{--*/ $percentual_acao = $percentual_acao + $pcaaux2->PERCENTUAL_ACAO /*--}}
                    {{--*/ $contadoracao++ /*--}}
                    @endif
                  @endforeach
                    @if ($contadoracao < 1)
                    {{--*/ $contadoracao = 1 /*--}}
                    @endif
                  {{--*/ $percentual_acao_final = $percentual_acao / $contadoracao /*--}}

                  <label for= "accordion-{{ $auxacao->ID_ACAO }}"><h3 class="subtitulo2 promeblue-claro">
                  @if($percentual_acao_final > 0 && $percentual_acao_final < 100)
                      <img src="../img/amarela.png">
                  @elseif ($percentual_acao_final > 99)
                      <img src="../img/verde.png">
                  @elseif ($percentual_acao_final < 1)
                      <img src="../img/vermelha.png">
                  @endif

                  {{ number_format(($percentual_acao_final), 0) }} % | {{ $auxacao->DESCRICAO }}</h3></label>
                  <div class="accordion-content">
                    <div class="col-md-12 justificafonte">
                      <div class="col-md-2" >
                        <P class="subtitulo4 promeblue">Responsáveis</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo4 promeblue">Investimento Previsto</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo4 promeblue">Investimento Executado</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="subtitulo4 promeblue">Prazo</P>
                      </div>
                      <div class="col-md-4" >
                        <P class="subtitulo4 promeblue">Prefeitura prestacao de contas {{ date('Y', strtotime($page->DATA_INICIO)) }}-{{ date('Y', strtotime($page->DATA_FIM)) }}</P>
                      </div>
                    </div>
                    <div class="col-md-12" >
                      <hr class="gradient-line">
                      <div class="col-md-2" >
                        <P class="texto">{{ $auxacao->RESPONSAVEIS }}</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">R$ {{ $auxacao->INVESTIMENTO_PREVISTO }}</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">R$ {{ $auxacao->INVESTIMENTO_EXECUTADO }}</P>
                      </div>
                      <div class="col-md-2" >
                        <P class="texto">{{ date('d/m/Y', strtotime($auxacao->DATA_FIM)) }}</P>
                      </div>
                      <div class="col-md-4">
                      @foreach ($pca as $pcaaux3)
                        @if ($pcaaux3->ID_ACAO == $auxacao->ID_ACAO)
                          <P class="texto">{{ date('d/m/Y', strtotime($pcaaux3->DATA_REFERENCIA)) }}: {{ $pcaaux3->CONSIDERACAO }}</P>
                        @endif
                      @endforeach
                      </div>
                      <hr>
                    </div>
                  </div>
                 @endforeach
                </div>
              </div>
            </div>
			<div class="col-md-12">
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
		  </div>
        </div>
      </section>
    </body>
    </html>