<?php 
    @session_start();
 ?>




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
                        <li></li><label onclick="exibirForm3()" class="fonte-menudados agencyfb"><li class="marcador">Gestão</li></label>
                        <li></li><label onclick="exibirForm4()" class="fonte-menudados agencyfb"><li class="marcador">Metas</li></label>
                    </div>
                </div> 
                <label onclick="exibirForm5()" class="fonte-menudados agencyfb">Administrar metas</label>
                <label onclick="exibirForm6()" class="fonte-menudados agencyfb">Administrar usuários</label>
            </div>
            
            <div class="col-md-9">

                <div id="resumo">
                    <h1 class="subtitulo2 promeblue-claro margin-bot">Geral</h1>
                    
                    <h3 class="subtitulo3 promeblue pointline margin-bot"><i class="glyphicon glyphicon-pencil formataglyp"></i> Metas</h3>
                        <div class="margin-p">
                            <h1 class="texto parag-inline">
                                <label class="contador geralnotificacoes parag-inline">2</label>
                            Que você ainda não finalizou
                            </h1>
                        </div>
                        <div class="margin-p largemargin-bot">
                            <h1 class="texto parag-inline">
                                <label class="contador geralnotificacoes parag-inline">14</label>
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
                        echo $_SESSION['EMAIL'] ?></p>
                    </div>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">Senha:</label>
                        <p class="parag-inline"><?php 
                        echo $_SESSION['SENHA'] ?></p>
                        <a>Alterar</a>
                    </div>

                    <h3 class="subtitulo3 promeblue">Dados pessoais</h3>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">Nome:</label>
                        <p class="parag-inline"><?php 
                        echo $_SESSION['NOME'] ?></p>
                    </div>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">Cargo:</label>
                        <p class="parag-inline"><?php 
                        echo $_SESSION['CARGO'] ?></p>
                        <a>Alterar</a>
                    </div>
                    <div class="margemleft-meusdados">
                        <label class="subtitulo4 parag-inline">Desativar conta:</label>
                        <button type="button" class="btn btn-danger">
                            <i class="glyphicon glyphicon-erase"></i>
                        </button>
                    </div>

                </div>

                <div style="display:none;" id="cadastrogestao">
                    REDIRECIONA PARA PÁGINA DE CADASTRO DE GESTÃO
                </div>

                <div style="display:none;" id="cadastrometa">
                    REDIRECIONA PARA PÁGINA DE CADASTRO DE METAS E AÇÕES RELACIONADAS
                </div>

                <div style="display:none;" id="minhasmetas" class="margin-bot">
                    <h1 class="subtitulo2 promeblue-claro margin-bot">Administrar Metas</h1>
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
                                <div class="col-md-3 meusdados-texto"><?php echo e($aux->OBJETIVO); ?></div>
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
                    <h1 class="subtitulo2 promeblue-claro margin-bot">Administrar usuários</h1>
                        <div class="admgeral-user">
                                    <h3 class="subtitulo4 align-input-label p-m-null">Procurar por nome:</h3>
                                    <input type="text" name="option" list="exemplo" class="input smallinputlist margin-tmi">
                                    <datalist id="exemplo">
                                        <option>Carlos</option>
                                        <option>Carol</option>
                                    </datalist>
                                </div>
                    <div class="row"> 
                        <form action="consultar" method="post" class="seguidas">
                            <div class="col-md-1"></div>
                            <div class="col-md-12 centralizafonte">
                                <div class="col-md-1 meusdados-tabela promeblue">Foto</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Nome</div>
                                <div class="col-md-2 meusdados-tabela promeblue">E-mail</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Cidade</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Tipo de usuário</div>
                                <div class="col-md-2 meusdados-tabela promeblue">Cargo</div>
                                <div class="col-md-1 meusdados-tabela promeblue">Bloquear</div>
                            </div>
                            <div class="col-md-12"><hr class="gradient-line"></div>
                        </form>

                        <form action="meta/atualizar" method="post" class="justificafonte">
                            <div class="col-md-12 centralizafonte">
                                <div class="col-md-1 texto"><i class="glyphicon glyphicon-user"></i></div>
                                <div class="col-md-2 texto">Nome</div>
                                <div class="col-md-2 texto">E-mail</div>
                                <div class="col-md-2 texto">Cidade</div>
                                <div class="col-md-2 texto">Tipo de usuário</div>
                                <div class="col-md-2 texto">Cargo</div>
                                <div class="col-md-1"><button type="button" class="btn btn-danger">
                                <i class="glyphicon glyphicon glyphicon-ban-circle"></i>
                            </button></div>
                            </div>
                            <div class="col-md-12"><hr class="gradient-line"></div>
                            </div>
                        </form>

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
        document.getElementById('cadastrogestao').style.display = "none";
        document.getElementById('cadastrometa').style.display = "none";
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
                document.getElementById('cadastrogestao').style.display = "none";
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
                document.getElementById('cadastrogestao').style.display = "";
                document.getElementById('cadastrometa').style.display = "none";
                document.getElementById('minhasmetas').style.display = "none";
                document.getElementById('metasseguidas').style.display = "none";
            /*document.getElementById('step-3btn').removeAttribute("disabled");
            document.getElementById("step-3btn").className = "btn-primary btn-circle btn";
            document.getElementById("step-1btn").className = "btn-default btn-circle btn";
            document.getElementById("step-2btn").className = "btn-default btn-circle btn";
            document.getElementById("step-4btn").className = "btn-default btn-circle btn";
            document.getElementById("step-3btn").addEventListener("click", exibirForm3);
            document.getElementById("step-2btn").addEventListener("click", exibirForm2);*/
        }

        function exibirForm4(){          
            document.getElementById('resumo').style.display = "none";  
            document.getElementById('meusdados').style.display = "none";
            document.getElementById('cadastrogestao').style.display = "none";
            document.getElementById('cadastrometa').style.display = "";
            document.getElementById('minhasmetas').style.display = "none";
            document.getElementById('metasseguidas').style.display = "none";
        }

        function exibirForm5(){    
            document.getElementById('resumo').style.display = "none";            
            document.getElementById('meusdados').style.display = "none";
            document.getElementById('cadastrogestao').style.display = "none";
            document.getElementById('cadastrometa').style.display = "none";
            document.getElementById('minhasmetas').style.display = "";
            document.getElementById('metasseguidas').style.display = "none";
        }

        function exibirForm6(){         
            document.getElementById('resumo').style.display = "none";   
            document.getElementById('meusdados').style.display = "none";
            document.getElementById('cadastrogestao').style.display = "none";
            document.getElementById('cadastrometa').style.display = "none";
            document.getElementById('minhasmetas').style.display = "none";
            document.getElementById('metasseguidas').style.display = "";
        }

    </script>

</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>