<?php 
    session_start();
 ?>



<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>


    <!--Importacoes javascript -->
    <script type="text/javascript" src="js/funcoes.js"></script>
</head>

<body>        
    <section>
    <form action="cadastro" method="post">
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <div id="stepline-1" style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastro"><img src="img/1-sel-am.png"></a>
                            <a href="cadastro"><img src="img/2-vm.png"></a>
                            <a href="cadastro"><img src="img/3-vm.png"></a>
                            <a href="cadastro"><img src="img/4-vm.png"></a>
                            <a href="cadastro"><img src="img/5-vm.png"></a>
                        </div>
                    </div>
                </div>
                <div id="stepline-2" style="height: 120px; background-color: #ffffff; margin-bottom: 50px; display:none;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastro"><img src="img/1-v.png"></a>
                            <a href="cadastro"><img src="img/2-sel-am.png"></a>
                            <a href="cadastro"><img src="img/3-vm.png"></a>
                            <a href="cadastro"><img src="img/4-vm.png"></a>
                            <a href="cadastro"><img src="img/5-vm.png"></a>
                        </div>
                    </div>
                </div>
                <div id="stepline-3" style="height: 120px; background-color: #ffffff; margin-bottom: 50px; display:none;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastro"><img src="img/1-v.png"></a>
                            <a href="cadastro"><img src="img/2-v.png"></a>
                            <a href="cadastro"><img src="img/3-sel-am.png"></a>
                            <a href="cadastro"><img src="img/4-vm.png"></a>
                            <a href="cadastro"><img src="img/5-vm.png"></a>
                        </div>
                    </div>
                </div>
                <div id="stepline-4" style="height: 120px; background-color: #ffffff; margin-bottom: 50px; display:none;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastro"><img src="img/1-v.png"></a>
                            <a href="cadastro"><img src="img/2-v.png"></a>
                            <a href="cadastro"><img src="img/3-v.png"></a>
                            <a href="cadastro"><img src="img/4-sel-am.png"></a>
                            <a href="cadastro"><img src="img/5-vm.png"></a>
                        </div>
                    </div>
                </div>
                <div id="stepline-5" style="height: 120px; background-color: #ffffff; margin-bottom: 50px; display:none;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastro"><img src="img/1-v.png"></a>
                            <a href="cadastro"><img src="img/2-v.png"></a>
                            <a href="cadastro"><img src="img/3-v.png"></a>
                            <a href="cadastro"><img src="img/4-v.png"></a>
                            <a href="cadastro"><img src="img/5-sel-am.png"></a>
                        </div>
                    </div>
                </div>
                <div id="step-1">
                    <h1 class="titulo promeblue">Cadastro de Usuários</h1>
                        <div class="row">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                            <div class="col-md-6 rightline">    
                                <label class="promeblue subtitulo3">Nome:</label>
                                <input type="text" name="nome" class="inputnormal input" placeholder="Nome do Usuario"></input>

                                <label class="promeblue subtitulo3">Email:</label>
                            <input type="email" name="email" class="inputnormal input" placeholder="Email do Usuario"></input>

                                <label class="promeblue subtitulo3">Senha:</label>
                            <input type="password" name="senha" class="s-inputnormal input" placeholder="Senha do Usuario"></input>


                                 <label class="promeblue subtitulo3">Confirmação de senha:</label>
                            <input type="password" name="" class="s-inputnormal input" placeholder="repita sua senha"></input>

                            <label class="promeblue subtitulo3">Estado:</label>
                            <select id="estado_cadastro" name="estado_cadastro" class="input smallinputlist" onChange="carregaCidadeCadastro(this.value);">                            
                               <?php foreach($estado as $aux): ?>
                                    <option value="<?php echo e($aux->SIGLA); ?>"><?php echo e($aux->NOME); ?></option>
                                <?php endforeach; ?>
                            </select>


                            </div>
                            <div class="col-md-6 p-fifty">  

                           <label class="promeblue subtitulo3">Cidade:</label>
                            <select id="cidades_cadastro" name="cidades_cadastro" class="margin-bot input smallinputlist">
                                <option value="">Selecione o estado primeiro...</option>
                            </select>    

                           

                               <label class="promeblue subtitulo3">Organizacao:</label>
                            <select class="smallinput inputlist" name="osa">
                                <?php foreach($osa as $aux): ?>
                                    <option value="<?php echo e($aux->ID_OSA); ?>"><?php echo e($aux->NOME); ?></option>
                                <?php endforeach; ?>
                            </select>

                             

                             <label class="promeblue subtitulo3">Cargo:</label>
                            <input type="text" name="cargo" class="inputnormal input" placeholder="Cargo que exerce"></input>     
                            </div>
                        </div>
                        <button id="next1" class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm2()">Próximo</button>            

                </div>
                <div id="step-2" style="display:none;">
                    <h1 class="titulo promeblue">Cadastro de Cidades</h1>
                        <div class="row">
                            <div class="col-md-6 rightline">    
                                <label class="promeblue subtitulo3">Portal da Cidade:</label>
                                <input type="text" name="portal_cidade" class="inputnormal input" placeholder="Site da Cidade"></input>
                                <label class="promeblue subtitulo3">Área (km²):</label>
                                <input type="text" name="areak2" class="inputnormal input" placeholder="Area da Cidade"></input>
                            </div>
                            <div class="col-md-6 p-fifty">    
                                <label class="promeblue subtitulo3">Número de Habitantes:</label>
                                <input type="text" name="num_habitantes" class="inputnormal input" placeholder="Numero de Habitantes da Cidade"></input>
                            </div>
                        </div>
                        <button  class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm1()">Voltar</button>  
                        <button id="next2" class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm3()">Próximo</button>
                </div>
                <div id="step-3" style="display:none;">
                    <h1 class="titulo promeblue">Cadastro de Gestão</h1>
                        <div class="row">
                            <div class="col-md-6 rightline">    
                                <div class="col-md-12 p-m-null">
                                    <div class="col-md-8 p-m-null">
                                        <label class="promeblue subtitulo3">Nome do Prefeito:</label>
                                        <input type="text" name="nome_prefeito" class="smallinput input"></input>
                                        
                                    </div>
                                    <div class="col-md-2">
                                        <label class="promeblue subtitulo3">Partido:</label>
                                        <select class="partidoinput inputlist" name="partido_prefeito">
                                        <?php foreach($partido as $aux): ?>
                                            <option value="<?php echo e($aux->ID_PARTIDO); ?>"><?php echo e($aux->NOME); ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>

                                     <div class="col-md-12 p-m-null">
                                    <div class="col-md-8 p-m-null">
                                        <label class="promeblue subtitulo3">Nome do Vice-Prefeito:</label>
                                        <input type="text" name="nome_vice" class="smallinput input"></input>
                                        
                                    </div>
                                    <div class="col-md-2">
                                        <label class="promeblue subtitulo3">Partido:</label>
                                        <select class="partidoinput inputlist" name="partido_vice">
                                        <?php foreach($partido as $aux): ?>
                                            <option value="<?php echo e($aux->ID_PARTIDO); ?>"><?php echo e($aux->NOME); ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>

                               
                                
                                <div class="col-md-12 p-m-null">
                                    <div class="col-md-8 p-m-null">
                                        <label class="promeblue subtitulo3">Nome do Vereador:</label>
                                        <input type="text" name="nome_vereador" class="smallinput input"></input>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="">Adicionar mais vereadores</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="promeblue subtitulo3">Partido:</label>
                                        <select class="partidoinput inputlist" name="partido_vereador">
                                        <?php foreach($partido as $aux): ?>
                                            <option value="<?php echo e($aux->ID_PARTIDO); ?>"><?php echo e($aux->NOME); ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 p-fifty">    
                                
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Início:</label>
                                        <input type="date" name="DATA_INICIO" class="input">
                                </div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Final:</label>
                                        <input type="date" name="DATA_FIM" class="input">
                                </div>
                            </div>
                        </div>

                         <button id="next1" class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm2()">Voltar</button> 
                         <button id="next1" class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm4()">Próximo</button>
                    
                </div>
                <div id="step-4" style="display:none;">
                    <h1 class="titulo promeblue">Cadastro de Metas</h1>
                        <div class="row">
                            <div class="col-md-6 rightline">    
                                <label class="promeblue subtitulo3">Tema:</label>
                                <select class="smallinput inputlist" name="tema">
                                        <?php foreach($tema as $aux): ?>
                                            <option value="<?php echo e($aux->ID_TEMA); ?>"><?php echo e($aux->NOME); ?></option>
                                        <?php endforeach; ?>
                                </select>

                                <label class="promeblue subtitulo3">Descrição:</label>
                                <textarea type="text" name="descricao_meta" class="inputtext input" placeholder="Descricao da Meta"></textarea>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Adicionar mais Metas</label>
                                </div>
                            </div>
                            <div class="col-md-6 p-fifty">
                                
                                <label class="promeblue subtitulo3">População Beneficiada:</label>
                                       <select class="smallinput inputlist" name="pop_beneficiada">
                                        <?php foreach($pop_beneficiada as $aux): ?>
                                            <option value="<?php echo e($aux->ID_POP_BENEFICIADA); ?>"><?php echo e($aux->TITULO); ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                <div>
                                    <div class="col-md-6 p-m-null">
                                        <label class="promeblue subtitulo3">Data Início:</label>
                                            <input type="date" name="data_inicio_meta" class="input">
                                    </div>
                                    <div class="col-md-6 p-m-null">
                                        <label class="promeblue subtitulo3">Data Final:</label>
                                            <input type="date" name="data_fim_meta" class="input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="gradient-line">
                    <h1 class="subtitulo promeblue">Cadastro de Ações</h1>
                        <div class="row">
                            <div class="col-md-6 rightline">
                                <label class="promeblue subtitulo3">Acao:</label>
                                <input type="text" name="descricao_acao" class="inputnormal input" placeholder="Nome da Acao"></input>
                               
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Adicionar mais Ações para essa meta</label>
                                </div>
                            </div>
                            <div class="col-md-6 p-fifty">
                                <label class="promeblue subtitulo3">Investimento Previsto:</label>
                                <input type="text" placeholder="R$ 0,00" name="investimento_previsto" class="inputnormal input"></input>
                                <label class="promeblue subtitulo3">Investimento Efetuado:</label>
                                <input type="text" placeholder="R$ 0,00" name="investimento_executado" class="inputnormal input"></input>
                                <div>
                                    <div class="col-md-6 p-m-null">
                                        <label class="promeblue subtitulo3">Data Início:</label>
                                            <input type="date" name="data_inicio_acao" class="input">
                                    </div>
                                    <div class="col-md-6 p-m-null">
                                        <label class="promeblue subtitulo3">Data Final:</label>
                                            <input type="date" name="data_fim_acao" class="input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button id="next1" class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm3()">Voltar</button> 
                        <button id="next1" class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm5()">Próximo</button>
                </div>
                <div id="step-5" style="display:none;">
                    <h1 class="titulo promeblue">Cadastro de Indicadores</h1>
                    <div class="container">
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Indicador</label>
                            <input type="text" name="nome_indicador"  class=" input inputlist" placeholder="Nome do Indicador">

                            <label class="promeblue subtitulo3">Descricão</label>
                            <textarea type="text" class="inputtext input" name="descricao_indicador" Placeholder="Descricao do Indicador"></textarea>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Adicionar mais Indicadores</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Protocolo:</label>
                            <input type="text" name="protocolo_indicador" class="input inputlist" placeholder="Dica para Protocolo"></input>

                            <label class="promeblue subtitulo3">Fonte:</label>
                            <input type="text" name="fonte_indicador" list="exampleList" class="inputlist input" placeholder="Dica para Fonte">
                            
                            <label class="promeblue subtitulo3">Valor Meta:</label>
                            <input type="text" placeholder="0,00" name="valor_meta" class="inputnormal input"></input>
                            <div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">UND.Medida</label>
                                    <select name="und_medida1"  class="smallinputlist input">
                                        <option>R$</option>
                                        <option>%</option>
                                        <option>QTD</option>
                                        <option>M</option>
                                        <option>M²</option>
                                        <option>M³</option>
                                        <option>KM</option>
                                        <option>KM²</option>
                                        <option>Pessoas</option>
                                        <option>kWh</option>
                                    </select>
                                    
                                </div>
                                <div class="col-md-6 p-m-null">
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <button id="next1" class="pull-left btn-primary btn-pad" type="button" onclick="exibirForm4()">Voltar</button>
                    <input type="submit" value="Cadastrar" class="btn-primary btn-pad"> 
                </div>
            </div>
            <!--<input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/meta'">-->
        </div>
    </form>
    </section>

    <script type="text/javascript">

        function exibirForm1(){            
            document.getElementById('step-1').style.display = "";
            document.getElementById('step-2').style.display = "none";
            document.getElementById('step-3').style.display = "none";
            document.getElementById('step-4').style.display = "none";
            document.getElementById('step-5').style.display = "none";
            document.getElementById('stepline-1').style.display = "";
            document.getElementById('stepline-2').style.display = "none";
            document.getElementById('stepline-3').style.display = "none";
            document.getElementById('stepline-4').style.display = "none";
            document.getElementById('stepline-5').style.display = "none";

                /*document.getElementById('step-1btn').removeAttribute("disabled");
                document.getElementById("step-1btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-2btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").className = "btn-default btn-circle btn";
                document.getElementById("step-2btn").addEventListener("click", exibirForm2);*/
            }

            function exibirForm2() {
                document.getElementById('step-1').style.display = "none";
                document.getElementById('step-2').style.display = "";
                document.getElementById('step-3').style.display = "none";
                document.getElementById('step-4').style.display = "none";
                document.getElementById('step-5').style.display = "none";
                document.getElementById('stepline-1').style.display = "none";
                document.getElementById('stepline-2').style.display = "";
                document.getElementById('stepline-3').style.display = "none";
                document.getElementById('stepline-4').style.display = "none";
                document.getElementById('stepline-5').style.display = "none";
                /*document.getElementById('step-2btn').removeAttribute("disabled");
                document.getElementById("step-2btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-1btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").className = "btn-default btn-circle btn";*/

        }

        function exibirForm3(){            
            document.getElementById('step-1').style.display = "none";
            document.getElementById('step-2').style.display = "none";
            document.getElementById('step-3').style.display = "";
            document.getElementById('step-4').style.display = "none";
            document.getElementById('step-5').style.display = "none";
            document.getElementById('stepline-1').style.display = "none";
            document.getElementById('stepline-2').style.display = "none";
            document.getElementById('stepline-3').style.display = "";
            document.getElementById('stepline-4').style.display = "none";
            document.getElementById('stepline-5').style.display = "none";
            document.getElementById('step-3btn').removeAttribute("disabled");
            document.getElementById("step-3btn").className = "btn-primary btn-circle btn";
            document.getElementById("step-1btn").className = "btn-default btn-circle btn";
            document.getElementById("step-2btn").className = "btn-default btn-circle btn";
            document.getElementById("step-4btn").className = "btn-default btn-circle btn";
            document.getElementById("step-3btn").addEventListener("click", exibirForm3);
            document.getElementById("step-2btn").addEventListener("click", exibirForm2);
        }

        function exibirForm4(){            
            document.getElementById('step-1').style.display = "none";
            document.getElementById('step-2').style.display = "none";
            document.getElementById('step-3').style.display = "none";
            document.getElementById('step-4').style.display = "";
            document.getElementById('step-5').style.display = "none";
            document.getElementById('stepline-1').style.display = "none";
            document.getElementById('stepline-2').style.display = "none";
            document.getElementById('stepline-3').style.display = "none";
            document.getElementById('stepline-4').style.display = "";
            document.getElementById('stepline-5').style.display = "none";
            document.getElementById('next1').style.display = "none";
            document.getElementById('next2').style.display = "none";
            document.getElementById('next3').style.display = "none";
            document.getElementById('next4').style.display = "";
            document.getElementById('step-4btn').removeAttribute("disabled");
            document.getElementById("step-4btn").className = "btn-primary btn-circle btn";
            document.getElementById("step-1btn").className = "btn-default btn-circle btn";
            document.getElementById("step-2btn").className = "btn-default btn-circle btn";
            document.getElementById("step-3btn").className = "btn-default btn-circle btn";
            document.getElementById("step-4btn").addEventListener("click", exibirForm4);
            document.getElementById("step-3btn").addEventListener("click", exibirForm3);
            document.getElementById("step-2btn").addEventListener("click", exibirForm2);
        }

        function exibirForm5(){            
            document.getElementById('step-1').style.display = "none";
            document.getElementById('step-2').style.display = "none";
            document.getElementById('step-3').style.display = "none";
            document.getElementById('step-4').style.display = "none";
            document.getElementById('step-5').style.display = "";
            document.getElementById('stepline-1').style.display = "none";
            document.getElementById('stepline-2').style.display = "none";
            document.getElementById('stepline-3').style.display = "none";
            document.getElementById('stepline-4').style.display = "none";
            document.getElementById('stepline-5').style.display = "";
            document.getElementById('next1').style.display = "none";
            document.getElementById('next2').style.display = "none";
            document.getElementById('next3').style.display = "none";
            document.getElementById('next4').style.display = "";
            document.getElementById('step-4btn').removeAttribute("disabled");
            document.getElementById("step-4btn").className = "btn-primary btn-circle btn";
            document.getElementById("step-1btn").className = "btn-default btn-circle btn";
            document.getElementById("step-2btn").className = "btn-default btn-circle btn";
            document.getElementById("step-3btn").className = "btn-default btn-circle btn";
            document.getElementById("step-4btn").addEventListener("click", exibirForm4);
            document.getElementById("step-3btn").addEventListener("click", exibirForm3);
            document.getElementById("step-2btn").addEventListener("click", exibirForm2);
        }
    </script>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>