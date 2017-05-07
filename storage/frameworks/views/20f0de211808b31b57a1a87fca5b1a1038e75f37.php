<?php
   session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Prestação Indicador</title>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <h1 class="titulo promeblue">Cadastro de Prestação Indicador</h1>
                    <div class="container">
                        <div>
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
                                <select id="cidades" name="cidade" class="margin-bot input smallinputlist">
                                    <option value="">Selecione a cidade</option>
                                </select>                      
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Tema:</label>
                                <select id="tema" class="smallinput inputlist" name="tema" onChange="carregaIndicador()";>
                                        <?php foreach($tema as $auxtema): ?>
                                            <option value="<?php echo e($auxtema->ID_TEMA); ?>"><?php echo e($auxtema->NOME); ?></option>
                                        <?php endforeach; ?>
                                </select>
                            </div>
                            <form action = "cadastroprestindicadorsolo" method="post">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Indicador:</label>
                                <select id="indicadores" name="ID_INDICADOR" class="input smallinputlist">
                                </select>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Data Referência:</label>
                                    <input type="date" name="DATA_REFERENCIA" class="smallinputlist input">
                            </div>
                            <div class="col-md-12 p-m-null">
                                <label class="promeblue subtitulo3">Valor:</label>
                                <input type="number" step="any" placeholder="R$ 0,00" name="VALOR" class="smallinputlist input"></input>
                            </div>
                            <div class="col-md-12 p-m-null">
                                <label class="promeblue subtitulo3">Percentual Indicador:</label>
                                <input type="number" step="any" placeholder="%" name="PERCENTUAL_INDICADOR" class="smallinputlist input"></input>
                            </div>
                            <div class="col-md-12 p-m-null"> 
                                <label class="promeblue subtitulo3">Consideração:</label>
                                <input type="text" name="CONSIDERACAO" class="smallinputlist input"></input>
                            </div>
                            <div class="col-md-12 p-m-null">
                                <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
                                </form>
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