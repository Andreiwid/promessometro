<?php
   session_start();
?>

@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
  <title>Meta Page</title>
</head>
<body>
  <section>
    <div class="middlecenter-cadastra">
      <h1 class="titulo promeblue">TEMA | {{ $tema->NOME}}</h1>
      <div class="subtitulo2 promeblue-claro">Cidade atual: {{ $cidade->NOME}}
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
                  @foreach ($meta as $auxmeta)
                          {{--*/$percentual_meta_total = 0/*--}}
                          {{--*/ $total = 0/*--}}
                          {{--*/ $contaux=0/*--}}
                          @foreach ($acao as $auxacao)
                          @if ($auxacao->ID_META === $auxmeta->ID_META)
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
                          @endif
                          @endforeach
                          @if ($contaux < 1)
                            {{--*/ $contaux = 1 /*--}}
                          @endif
                    {{--*/$percentual_meta_total = $total / $contaux/*--}}

                    <div class="col-md-2" >
                      @if($percentual_meta_total <1)<img src="<?php echo url('/img/vermelha.png') ?>">
                      @elseif($percentual_meta_total >= 1 && $percentual_meta_total < 100)<img src="<?php echo url('/img/amarela.png') ?>">
                      @else<img src="<?php echo url('/img/verde.png') ?>">
                      @endif 
                    </div>
                    <div class="col-md-3" >
                      <P class="subtitulo3 promeblue-claro">{{ $percentual_meta_total }} %</P>
                    </div>
                    <div class="col-md-7" >
                      <a onclick="javascript:location.href='/public/detalhemeta/{{$auxmeta->ID_META}}'">
                      <P class="subtitulo3 promeblue-claro">{{ $auxmeta->DESCRICAO }}</P>
                      </a>
                    </div>
                  @endforeach
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
                  @foreach ($indicador as $auxindicador)
                    <div class="col-md-7" >
                      <a onclick="javascript:location.href='/public/detalheindicador/{{$auxindicador->ID_INDICADOR}}'">
                      <P class="subtitulo3 promeblue-claro">{{ $auxindicador->DESCRICAO }}</P>
                      </a>
                    </div>
                    @endforeach
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