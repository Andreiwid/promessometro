<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Gestão</title>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <h1 class="titulo promeblue">Cadastro de Gestão</h1>
                    <div class="container">
                        <form action = "cadastrogestaosolo" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-12"> 
                            <label class="promeblue subtitulo3">Link da Promessa Campanha:</label>
                            <input type="text" name="PROMESSA_CAMPANHA" class="inputnormal input"></input>
                            <div class="col-md-3 p-m-null">
                                <label class="promeblue subtitulo3">Data Início:</label>
                                    <input type="date" name="DATA_INICIO" class="dateinputlist input">
                            </div>
                            <div class="col-md-3">
                                <label class="promeblue subtitulo3">Data Final:</label>
                                    <input type="date" name="DATA_FIM" class="dateinputlist input">
                            </div>
                            <div class="col-md-6">
                                <label class="promeblue subtitulo3">Cidade:</label>
                                <select name="ID_CIDADE" class="inputlist input">
                                <?php foreach($cidade as $auxcidade): ?>
                                    <option value="<?php echo e($auxcidade->ID_CIDADE); ?>"><?php echo e($auxcidade->NOME); ?></option>
                                <?php endforeach; ?>
                                </select>
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
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>