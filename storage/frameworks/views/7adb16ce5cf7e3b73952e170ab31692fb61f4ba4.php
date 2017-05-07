<!DOCTYPE html>
<html>
<head>
    <title>Meta Page</title>
</head>
<body>
    <section>
            <div class="middlecenter-cadastra">
                <h1 class="titulo promeblue">Minhas Metas</h1><br><br>
                <div class="container">
                    <form action="consultar" method="post" class="seguidas">
                        <div class="col-md-1"></div>
                        <div class="col-md-8 centralizafonte">
                            <div class="col-md-2 subtitulo3 promeblue">Tema</div>
                            <div class="col-md-3 subtitulo3 promeblue">Objetivo</div>
                            <div class="col-md-1 subtitulo3 promeblue">%</div>
                            <div class="col-md-2 subtitulo3 promeblue">Responsável</div>
                            <div class="col-md-2 subtitulo3 promeblue">Data Início</div>
                            <div class="col-md-2 subtitulo3 promeblue">Data Fim</div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <div class="col-md-6 subtitulo3 promeblue">Alterar</div>
                            <div class="col-md-6 subtitulo3 promeblue">Excluir</div>
                        </div>
                        <div class="col-md-12"><hr class="gradient-line"></div>
                    </form>

                    <?php foreach($meta as $aux): ?>
                    <form action="meta/atualizar" method="post" class="justificafonte">
                            <div class="col-md-1"><img src="img/lupa-green.png"></div>
                            <div class="col-md-8">
                                <input type = "hidden" name="ID_META" value="<?php echo e($aux->ID_META); ?>">
                                <div class="col-md-2 texto"><?php echo e($aux->ID_TEMA); ?></div>
                                <div class="col-md-3 texto"><?php echo e($aux->OBJETIVO); ?></div>
                                <div class="col-md-1 texto">100,0</div>
                                <div class="col-md-2 texto"><?php echo e($aux->ID_GESTAO); ?></div>
                                <div class="col-md-2 texto"><?php echo e($aux->DATA_INICIO); ?></div>
                                <div class="col-md-2 texto"><?php echo e($aux->DATA_FIM); ?></div>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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
                                <hr class="gradient-line">
                            </div>
                    </form>
                    <?php endforeach; ?>
                        <div class="col-md-1"><img src="img/lupa-yellow.png"></div>
                        <div class="col-md-8">
                            <div class="col-md-2">testeamarelo</div>
                            <div class="col-md-3">amarelo</div>
                            <div class="col-md-1">50,0</div>
                            <div class="col-md-2">ahuheauheau</div>
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
                            <hr class="gradient-line">
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
                <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public'">
                <br>
            </div>
    </section>
</body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>