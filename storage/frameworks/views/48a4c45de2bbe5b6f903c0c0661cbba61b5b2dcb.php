<?php 
    session_start();
 ?>



<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>
    <script src="js/funcoes.js"></script>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro"> 
                <h1 class="titulo promeblue">Cadastro de Usuários</h1>
                <form action = "CadastroUsuarioComum" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Nome:</label>
                                <input type="text" name="nome_cadastroComum" class="inputnormal input" placeholder="Nome do Usuario"></input>
                            <label class="promeblue subtitulo3">Email:</label>
                            <input type="email" name="email_cadastroComum" class="inputnormal input" placeholder="Email do Usuario"></input>
                             <label class="promeblue subtitulo3">Senha:</label>
                            <input type="password" name="senha_cadastroComum" class="s-inputnormal input" placeholder="Senha do Usuario"></input>
                            <label class="promeblue subtitulo3">Confirmação de senha:</label>
                            <input type="password" name="" class="s-inputnormal input" placeholder="repita sua senha"></input>
                        </div>
                        <div class="col-md-6 p-fifty">    
                             <label class="promeblue subtitulo3">Estado:</label>
                                <select id="estado" name="estado_cadastroComum" class="input smallinputlist" onChange="carregaCidade(this.value);">
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

                           <label class="promeblue subtitulo3">Cidade:</label>
                                <select id="cidades" name="cidade" class="margin-bot input smallinputlist">
                                    <option value="">Selecione a cidade</option>
                                </select>              
                        </div>
                    </div>
                    <input type="submit" value="Cadastrar" class="btn-primary btn-pad"> 
                </form>
            </div>
           
            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href='/public/tipoCadastro'"> 
        </div>
    </section>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>