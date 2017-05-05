<?php
  session_start();
 ?>

@extends ('navbar')

<!DOCTYPE html>
<html>
<head>

  {{--*/$percentual_meta_cidade = 0/*--}}
  {{--*/ $totalcity = 0/*--}}
  {{--*/ $contacity = 0 /*--}}
  @foreach($gestao as $auxgestao)
      @if ($auxgestao->ID_CIDADE === $cidade->ID_CIDADE)
        @foreach ($meta as $auxmeta)
         @if($auxmeta->ID_GESTAO===$auxgestao->ID_GESTAO)
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
            {{--*/$totalcity = $totalcity + $percentual_meta_total/*--}}
            {{--*/$contacity++ /*--}}
          @endif
        @endforeach
      @endif
    @endforeach
    @if ($contacity < 1)
      {{--*/ $contacity = 1 /*--}}
    @endif
    {{--*/ $percentual_meta_cidade = $totalcity / $contacity /*--}}
  

  <title>Seleção de Tema</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    $( document ).ready(function() {
      $("#test-circle").circliful({
        animation: 1,
        animationStep: 3,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: '{{$percentual_meta_cidade}}'
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

          <!-- <div class="col-md-2">
          <div id="test-circle1">
              <label class="subtitulo3 promeblue graph-goalind">Metas</label>
            </div>
          </div> -->

          <div class="col-md-4">
            <div style ="padding-top:75px">
              <label class="subtitulo2 promeblue-claro centralizafonte">{{$cidade->NOME}}</label>
              <label class="subtitulo2 promeblue-claro centralizafonte">{{$cidade->POPULACAO}} Habitantes</label>
              <label class="subtitulo2 promeblue-claro centralizafonte">{{$cidade->AREAK2}} km²</label>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h1 class="titulo promeblue">Tema</h1>       
        </div>
        <div class="col-md-12">

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Abastecimento</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/1/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-scale glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Acessibilidade</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/2/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-sunglasses glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Administração</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/3/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-list-alt glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Água/Saneamento</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/4/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-tint glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Cidadania</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/5/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-comment glyphicon-theme "></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Cultura</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/6/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-knight glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Dev. Cidade</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/7/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-signal glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Dev. Urbano</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/8/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-fullscreen glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Educação</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/9/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-education glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Finanças</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/10/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-piggy-bank glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Gestão e Controle</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/11/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-object-align-right glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Habitação</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/12/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-home glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Infraestrutura</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/13/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-stats glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Jurisdição</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/14/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-plus glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Lazer</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/15/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-music glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >R.Humanos</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/16/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-user glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Saúde</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/17/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-plus glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Segurança</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/18/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-lock glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Serviços Públicos</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/19/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-paperclip glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Serviços Técnicos</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/20/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-wrench glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Sustentabilidade</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/21/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-leaf glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Trabalho e Renda</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/22/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-briefcase glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Turismo</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/23/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-plane glyphicon-theme"></span>
            </button>
          </div>

          <div class="col-md-2 height-div">
            <P class="subtitulo3 centralizafonte" >Urbanismo</P>
            <button class="button-theme" onclick="javascript:location.href='/public/temaMetaIndicador/24/{{$cidade->ID_CIDADE}}'">
              <span class="glyphicon glyphicon-time glyphicon-theme"></span>
            </button>
          </div>

        </div>
      </div>  
    </div>
  </section>
</body>
</html>