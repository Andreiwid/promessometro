<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>
</head>

<body>        
    <section>
        <div class="middlecenter-cadastra">
            <h1 class="titulo promeblue">Cadastro de Usuarios</h1><br><br>
            <form action = "cadastrar" method="post">
                <div class="container">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                    <div class="col-md-6 rightline p-m-null">    
                        <label class="promeblue subtitulo3">Nome:</label>
                        <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>

                        <label class="promeblue subtitulo3">Email:</label>
                        <input type="text" name="ID_TEMA" style="margin-right:150px; width:450px; border-radius:5px; border: 1px #A9A9A9 solid; height: 30px;"></input>

                        <label class="promeblue subtitulo3">Organização:</label>
                        <input type="text" name="option" list="exampleList" class="inputlist">
                        <datalist id="exampleList">
                            <option>ONG</option>
                            <option >Prefeitura</option>
                        </datalist>


                        <label class="promeblue subtitulo3">Cargo:</label>
                        <input type="text" name="option" list="exampleList1" class="inputlist">
                        <datalist id="exampleList1">
                            <option>Cargo 1</option>
                            <option >Outro</option>
                        </datalist>
                    </div>

                    <div class="col-md-6 p-fifty">    

                        <label class="promeblue subtitulo3">Estado:</label>
                        <input type="text" name="option" list="exampleList2" class="inputlist">
                        <datalist id="exampleList2">
                            <option>Bahia</option>
                            <option >São Paulo</option>
                        </datalist>


                        <label class="promeblue subtitulo3">Cidade:</label>
                        <input type="text" name="option" list="exampleList3" class="inputlist">
                        <datalist id="exampleList3">
                            <option>Campinas</option>
                            <option >São Paulo</option>
                        </datalist>

                    </div>
                </div>
            </form>
            <br><br><input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/meta'"> 
        </div>
    </section>
</body>
</html>

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>