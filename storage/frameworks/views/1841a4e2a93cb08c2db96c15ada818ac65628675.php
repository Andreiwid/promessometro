<!DOCTYPE html>
<html>
<head>
    <title>Promessômetro</title>
</head>

<body>       
  <section>
    <div class="middlecenter-cadastra">
        <h1 class="promeblue subtitulo2">Minha conta</h1>
        <div class="row">
            <div class="col-md-2 meusdados">
                <label  onclick="exibirForm1()" class="fonte-menudados agencyfb active">Geral</label>
                <label  onclick="exibirForm2()" class="fonte-menudados agencyfb active">Meus dados</label>
                <div>
                    <label for= "accordion-1" class="fonte-menudados agencyfb" onclick="$(this).find('i').toggleClass('glyphicon-triangle-right').toggleClass('glyphicon-triangle-bottom')">Cadastrar
                        <i class="glyphicon glyphicon-triangle-right triangulo"></i>
                    </label>
                </div>
                <div class="accordion-item">
                    <input type="checkbox" name="accordion" id="accordion-1" />
                    <div class="accordion-content open">
                        
                        <li></li><a href="cadastrometasolo"><label class="fonte-menudados agencyfb"><li class="marcador">Metas</li></label></a>
                        <li></li><a href="cadastroindicadorsolo"><label class="fonte-menudados agencyfb"><li class="marcador">Indicadores</li></label></a>
                        <li></li><a href="cadastroacaosolo"><label class="fonte-menudados agencyfb"><li class="marcador">Ações</li></label></a>
                        <li></li><a href="cadastroprestacaosolo"><label class="fonte-menudados agencyfb"><li class="marcador">Prest. Ação</li></label></a>
                        <li></li><a href="cadastroprestindicadorsolo"><label class="fonte-menudados agencyfb"><li class="marcador">Prest. Indicador</li></label></a>
                    </div>
                </div> 
                <label onclick="exibirForm3()" class="fonte-menudados agencyfb">Administrar metas</label>
                <label onclick="exibirForm4()" class="fonte-menudados agencyfb">Metas seguidas</label>
            </div>
            
            <div class="col-md-9">

                <div id="resumo">
                    <h1 class="subtitulo2 promeblue-claro margin-bot">Geral</h1>
                    
                    <h3 class="subtitulo3 promeblue pointline margin-bot"><i class="glyphicon glyphicon-pencil formataglyp"></i> Metas</h3>
                        <div class="margin-p">
                            <h1 class="texto parag-inline">
                                <label class="contador geralnotificacoes parag-inline">0</label>
                            Que você ainda não finalizou
                            </h1>
                        </div>
                        <div class="margin-p largemargin-bot">
                            <h1 class="texto parag-inline">
                                <label class="contador geralnotificacoes parag-inline">0</label>
                            Comentários em suas metas
                            </h1>
                        </div>

                    <h3 class="subtitulo3 promeblue pointline margin-bot"><i class="glyphicon glyphicon-pencil formataglyp"></i> Notificações</h3>
                        <div class="margin-p largemargin-bot">
                            <h1 class="texto parag-inline">
                                <label class="contador geralnotificacoes parag-inline">0</label>
                            Notificações
                            </h1>
                        </div>

                    <h3 class="subtitulo3 promeblue pointline margin-bot"><i class="glyphicon glyphicon-pencil formataglyp"></i> Denúncias</h3>
                        <div class="margin-p largemargin-bot">
                            <h1 class="texto parag-inline">
                                <label class="contador geralnotificacoes parag-inline">0</label>
                            Denúncia(s) recebida(s)
                            </h1>
                        </div>
                </div>

                <div style="display:none;" id="meusdados" class="margin-bot">
                    <h1 class="subtitulo2 promeblue-claro margin-bot">Meus dados</h1>
                    
                    <h3 class="subtitulo3 promeblue">Dados da conta</h3>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">E-mail:</label>
                        <p class="parag-inline"><?php
                         echo $_SESSION['EMAIL']
                         ?></p>
                    </div>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">Senha:</label>
                        <form name="form_senha" method="post" action="alteraSenha-User.php">
                            <input type="password" value="<?php 
                        echo $_SESSION['SENHA']; ?>" name="senha_user">

                        <INPUT type="submit" value="Alterar">    
                        </form>
                        
                    </div>

                    <h3 class="subtitulo3 promeblue">Dados pessoais</h3>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">Nome:</label>
                        <p class="parag-inline"><?php 
                            echo $_SESSION['NOME'];
                         ?></p>
                    </div>
                    <div class="margemleft-meusdados">
                        
                        
                        <form name="form_cargo" method="post" action="alteraCargo-User.php">
                            <label class="subtitulo4 parag-inline">Cargo:</label>
                            <input type="text" value="<?php 
                            echo $_SESSION['CARGO']; ?>" name="cargo_user" readonly>
                            <br>
                            <br>
                            <label class="subtitulo4 parag-inline">Novo Cargo:</label>
                            <input type="text" name="cargo_user_new">   

                        <INPUT type="submit" value="Alterar">    
                        </form>
                    </div>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">Desativar conta:</label>
                        <button type="button" class="btn btn-danger">
                            <i class="glyphicon glyphicon-erase"></i>
                        </button>
                    </div>

                </div>

                <div style="display:none;" id="minhasmetas" class="margin-bot">
                    <h1 class="subtitulo2 promeblue-claro margin-bot">Minhas Metas</h1>
                    <div class="row"> 
                        <form action="consultar" method="post" class="seguidas">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 centralizafonte">
                                <div class="col-md-2 meusdados-tabela promeblue">Tema</div>
                                <div class="col-md-3 meusdados-tabela promeblue">Objetivo</div>
                                <div class="col-md-1 meusdados-tabela promeblue">%</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Responsável</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Data Início</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Data Fim</div>
                            </div>
                            <div class="col-md-1 meusdados-tabela promeblue">Prestar contas</div>
                            <div class="col-md-1 meusdados-tabela promeblue">Alterar</div>
                            <div class="col-md-1 meusdados-tabela promeblue">Excluir</div>
                            <div class="col-md-12"><hr class="gradient-line"></div>
                        </form>

                        <?php foreach($meta as $aux): ?>
                        <form action="meta/atualizar" method="post" class="justificafonte">
                            <div class="col-md-1"><img src="img/lupa-green.png"></div>
                            <div class="col-md-8">
                                <input type = "hidden" name="ID_META" value="<?php echo e($aux->ID_META); ?>">
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->ID_TEMA); ?></div>
                                <div class="col-md-3 meusdados-texto"><?php echo e($aux->DESCRICAO); ?></div>
                                <div class="col-md-1 meusdados-texto">100,0</div>
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->ID_GESTAO); ?></div>
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->DATA_INICIO); ?></div>
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->DATA_FIM); ?></div>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                            <div class="col-md-1"><button type="submit" class="btn btn-info button-presta">
                                <i class="glyphicon glyphicon-send"></i>
                            </button></div>
                            <div class="col-md-1"><button type="submit" class="btn btn-info">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </button></div>
                            <div class="col-md-1"><button type="button" class="btn btn-danger">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button></div>
                            <div class="col-md-12">
                                <hr class="gradient-line">
                            </div>
                        </form>
                        <?php endforeach; ?>

                    </div>

                </div>

                <div style="display:none;" id="metasseguidas" class="margin-bot">
                    <h1 class="subtitulo2 promeblue-claro margin-bot">Metas seguidas</h1>
                    <div class="row"> 
                        <form action="consultar" method="post" class="seguidas">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 centralizafonte">
                                <div class="col-md-2 meusdados-tabela promeblue">Tema</div>
                                <div class="col-md-3 meusdados-tabela promeblue">Objetivo</div>
                                <div class="col-md-1 meusdados-tabela promeblue">%</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Responsável</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Data Início</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Data Fim</div>
                            </div>
                            <div class="col-md-3">
                                <div class="col-md-6 meusdados-tabela promeblue">Visualizar</div>
                                <div class="col-md-6 meusdados-tabela promeblue">Deixar de seguir</div>
                            </div>
                            <div class="col-md-12"><hr class="gradient-line"></div>
                        </form>

                        <?php foreach($meta as $aux): ?>
                        <form action="meta/atualizar" method="post" class="justificafonte">
                            <div class="col-md-1"><img src="img/lupa-green.png"></div>
                            <div class="col-md-8">
                                <input type = "hidden" name="ID_META" value="<?php echo e($aux->ID_META); ?>">
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->ID_TEMA); ?></div>
                                <div class="col-md-3 meusdados-texto"><?php echo e($aux->DESCRICAO); ?></div>
                                <div class="col-md-1 meusdados-texto">100,0</div>
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->ID_GESTAO); ?></div>
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->DATA_INICIO); ?></div>
                                <div class="col-md-2 meusdados-texto"><?php echo e($aux->DATA_FIM); ?></div>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                            <div class="col-md-3">
                                <div class="col-md-6 centralizafonte"><button type="submit" class="btn btn-info">
                                    <i class="glyphicon glyphicon-arrow-right"></i>
                                </button></div>
                                <div class="col-md-6"><button type="button" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-erase"></i>
                                </button></div>
                            </div>
                            <div class="col-md-12">
                                <hr class="gradient-line">
                            </div>
                        </form>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

    function exibirForm1(){            
        document.getElementById('resumo').style.display = "";
        document.getElementById('meusdados').style.display = "none";
        document.getElementById('minhasmetas').style.display = "none";
        document.getElementById('metasseguidas').style.display = "none";
                /*document.getElementById('step-1btn').removeAttribute("disabled");
                document.getElementById("step-1btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-2btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").className = "btn-default btn-circle btn";
                document.getElementById("step-2btn").addEventListener("click", exibirForm2);*/
            }

            function exibirForm2() {
                document.getElementById('resumo').style.display = "none";
                document.getElementById('meusdados').style.display = "";
                document.getElementById('minhasmetas').style.display = "none";
                document.getElementById('metasseguidas').style.display = "none";
                /*document.getElementById('step-2btn').removeAttribute("disabled");
                document.getElementById("step-2btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-1btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").className = "btn-default btn-circle btn";*/
            }

        function exibirForm3(){    
            document.getElementById('resumo').style.display = "none";            
            document.getElementById('meusdados').style.display = "none";
            document.getElementById('minhasmetas').style.display = "";
            document.getElementById('metasseguidas').style.display = "none";
        }

        function exibirForm4(){         
            document.getElementById('resumo').style.display = "none";   
            document.getElementById('meusdados').style.display = "none";
            document.getElementById('minhasmetas').style.display = "none";
            document.getElementById('metasseguidas').style.display = "";
        }

    </script>

</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>