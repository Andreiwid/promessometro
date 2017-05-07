<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <div style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastrousuario"><img src="img/1-sel-am.png"></a>
                            <a href="cadastrocidade"><img src="img/2-vm.png"></a>
                            <a href="cadastrogestao"><img src="img/3-vm.png"></a>
                            <a href="cadastrometaacao"><img src="img/4-vm.png"></a>
                        </div>
                    </div>
                </div>
                <h1 class="titulo promeblue">Cadastro de Usuários</h1>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Nome:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Email:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Senha:</label>
                            <input type="password" name="ID_TEMA" class="s-inputnormal input"></input>
                            <label class="promeblue subtitulo3">Confirmação de senha:</label>
                            <input type="password" name="ID_TEMA" class="s-inputnormal input"></input>
                            <label class="promeblue subtitulo3">Organização:</label>
                            <input type="text" name="option" list="exampleList" class="inputlist input">
                            <datalist id="exampleList">
                                <option>ONG</option>
                                <option >Prefeitura</option>
                             </datalist>
                        </div>
                        <div class="col-md-6 p-fifty">    
                            <label class="promeblue subtitulo3">Cargo:</label>
                            <input type="text" name="option" list="exampleList1" class="inputlist input">
                            <datalist id="exampleList1">
                                <option>Cargo 1</option>
                                <option >Outro</option>
                            </datalist>   
                            <label class="promeblue subtitulo3">Estado:</label>
                            <input type="text" name="option" list="exampleList2" class="inputlist input">
                            <datalist id="exampleList2">
                                <option>Bahia</option>
                                <option >São Paulo</option>
                            </datalist>
                            <label class="promeblue subtitulo3">Cidade:</label>
                            <input type="text" name="option" list="exampleList3" class="inputlist input">
                            <datalist id="exampleList3">
                                <option>Campinas</option>
                                <option >São Paulo</option>
                            </datalist>
                        </div>
                    </div>
                </form>
            </div>
            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/meta'"> 
        </div>
    </section>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>