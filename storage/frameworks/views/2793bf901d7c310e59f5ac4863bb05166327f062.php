<?php
   session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Metas</title>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <h1 class="titulo promeblue">Cadastro de Metas</h1>
                    <div class="container">
                        <form action = "cadastrometasolo" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-12"> 
                            <label class="promeblue subtitulo3">Descrição:</label>
                            <input type="text" name="DESCRICAO" class="inputtext input"></input>
                            <label class="promeblue subtitulo3">População Beneficiada:</label>
                            <select name="ID_POP_BENEFICIADA" class="inputlist input">
                                <?php foreach($pop_beneficiada as $auxpop): ?>
                                    <option value="<?php echo e($auxpop->ID_POP_BENEFICIADA); ?>"><?php echo e($auxpop->DESCRICAO); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div>
                                <div class="col-md-3 p-m-null">
                                <label class="promeblue subtitulo3">Data Início:</label>
                                    <input type="date" name="DATA_INICIO" class="dateinputlist input">
                            </div>
                            <div class="col-md-3">
                                <label class="promeblue subtitulo3">Data Final:</label>
                                    <input type="date" name="DATA_FIM" class="dateinputlist input">
                            </div>
                            <div class="col-md-12 p-m-null">
                                <label class="promeblue subtitulo3">Gestão:</label>
                                <select name="ID_GESTAO" class="inputlist input">
                                    <?php foreach($gestao as $auxgestao): ?>
                                        <option value="<?php echo e($auxgestao->ID_GESTAO); ?>"><?php echo e($auxgestao->PROMESSA_CAMPANHA); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Estado:</label>
                                    <select id="estado" class="input smallinputlist" onChange="carregaCidade(this.value);">
                                        <option value="">Selecione o estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="PR">Paraná</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Cidade:</label>
                                <select id="cidades" name="ID_CIDADE" class="margin-bot input smallinputlist">
                                    <option value="">Selecione a cidade</option>
                                </select>                      
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Tema:</label>
                                <select name="ID_TEMA" class="inputlist input">
                                    <?php foreach($tema as $auxtema): ?>
                                        <option value="<?php echo e($auxtema->ID_TEMA); ?>"><?php echo e($auxtema->NOME); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                                <div class="col-md-12 p-m-null">
                                    <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/funcoes.js"></script>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>