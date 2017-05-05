@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Meta Page</title>
</head>
<body>
    <section style="margin-top: 83px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                <h1 class="h1seguidas">Minhas Metas</h1><br><br>
                <div class="container">
                    <form action="consultar" method="post" class="seguidas">
                        <div class="col-md-1"></div>
                        <div class="col-md-8">
                            <div class="col-md-2">Tema</div>
                            <div class="col-md-3">Objetivo</div>
                            <div class="col-md-1" style="padding: 0px;">%</div>
                            <div class="col-md-2">Responsável</div>
                            <div class="col-md-2">Data Início</div>
                            <div class="col-md-2">Data Fim</div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <div class="col-md-6">Alterar</div>
                            <div class="col-md-6">Excluir</div>
                        </div>
                        <div class="col-md-12"><hr></div>
                    </form>

                    @foreach ($meta as $aux)
                    <form action="meta/atualizar" method="post">
                        <div style="word-wrap: break-word;">
                            <div class="col-md-1"><img src="img/lupa-green.png"></div>
                            <div class="col-md-8">
                                <input type = "hidden" name="ID_META" value="{{ $aux->ID_META }}">
                                <div class="col-md-2">{{ $aux->ID_TEMA }}</div>
                                <div class="col-md-3">{{ $aux->OBJETIVO }}</div>
                                <div class="col-md-1" style="padding: 0px;">100,0</div>
                                <div class="col-md-2">{{ $aux->ID_GESTAO }}</div>
                                <div class="col-md-2">{{ $aux->DATA_INICIO }}</div>
                                <div class="col-md-2">{{ $aux->DATA_FIM }}</div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                            <div class="col-md-1"><img src="img/owner.png"></div>
                            <div class="col-md-2">
                                <div class="col-md-6"><button type="submit" class="btn btn-info">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </button></div>
                                <div class="col-md-6"><button type="button" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </button></div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div style="word-wrap: break-word;">
                        <div class="col-md-1"><img src="img/lupa-yellow.png"></div>
                        <div class="col-md-8">
                            <div class="col-md-2">testeamarelo</div>
                            <div class="col-md-3">amarelo</div>
                            <div class="col-md-1">50,0</div>
                            <div class="col-md-2">3</div>
                            <div class="col-md-2">10-05-1999</div>
                            <div class="col-md-2">10-03-2000</div>
                        </div>
                        <div class="col-md-1"><img src="img/owner.png"></div>
                        <div class="col-md-2">
                            <div class="col-md-6"><button type="submit" class="btn btn-info">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </button></div>
                            <div class="col-md-6"><button type="button" class="btn btn-danger">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button></div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div style="word-wrap: break-word;">
                        <div class="col-md-1"><img src="img/lupa-red.png"></div>
                        <div class="col-md-8">
                            <div class="col-md-2">testevermelho</div>
                            <div class="col-md-3">vermelho</div>
                            <div class="col-md-1">20,0</div>
                            <div class="col-md-2">4</div>
                            <div class="col-md-2">10-06-2009</div>
                            <div class="col-md-2">11-06-2009</div>
                        </div>
                        <div class="col-md-1"><img src="img/owner.png"></div>
                        <div class="col-md-2">
                            <div class="col-md-6"><button type="submit" class="btn btn-info">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </button></div>
                            <div class="col-md-6"><button type="button" class="btn btn-danger">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button></div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        </div>
                </div>
                <input type="submit" value="Cadastrar" class="btn-primary btn-pad" onclick="location.href= 'meta/cadastrar'">
                <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/Promessometro/public/'">
                <br>
            </div>
        </div>
    </section>
</body>
</html>
