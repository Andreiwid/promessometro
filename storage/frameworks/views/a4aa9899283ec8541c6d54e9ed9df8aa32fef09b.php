<!DOCTYPE html>
<html>
<head>
    <title>Promessômetro Nacional</title>
</head>

<body>
    <section class="jumbotron sobre">
        <div class="container">
            <div class="row text-center">
                <h1 class="titulo" style="font-size: 100px;">PROMESSÔMETRO</h1>
                <h2 class="titulo">O QUE É?</h2>
                <p class="texto">O Promessômetro é uma ferramenta para auditoria cidadã e avaliação da gestão municipal.</p>
                <a href="cadastro"><button class="btn btn-info btn-primary btn-lg">FAÇA PARTE DO PROMESSÔMETRO!</button></a>
            </div>
        </div>
    </section>
    <section class="jumbotron mapaBr">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                   <div class="text-left">
                    <div id="mapaBrasil"></div>
                </div>
            </div>
            <div class="col-md-7">
                <h1 class="titulo"><b class="promeblue">Prometeu, tem que cumprir!</b></h1>
                <div class="col-md-12">
                    <p class="col-md-9 justificafonte adobedevanagari">O prefeito da sua cidade está cumprindo as promessas feitas?</br>
                        Veja no seu Estado as cidades que já possuem Promessômetro
                        e auditores cidadãos fiscalizando as promessas feitas pelos prefeitos.</p>
                    </div>
                    
                    <div>
                        <label class="subtitulo4">Estado:</label>
                        <select id="estado" class="input smallinputlist" onChange="carregaCidade(this.value);">                            
                            <option value="">Selecione</option>
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
                    <div>
                        <label class="subtitulo4">Cidade:</label>
                        <select id="cidades" class="margin-bot input smallinputlist">
                            <option value="0">Selecione o estado</option>
                        </select>                      
                    </div>
                    <button class="btn btn-info btn-primary btn-lg margin-tmi">Achar metas!</button>

                </div>
            </div>
        </div>
    </section>
    <section class="jumbotron">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="center-block img-responsive" src="img/carousel/img1.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <h2>Protestos</h2>
                            <p>Manifestantes na avenida por uma política melhor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="center-block img-responsive" src="img/carousel/img2.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <h2>Protestos</h2>
                            <p>Manifestantes na avenida por uma política melhor</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="jumbotron bg-depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail">
                        <img src="img/thumbnail/thumb1.jpg" alt="ODED GRAJEW" class="img-circle">
                        <div class="caption">
                            <p><q>O balanço das metas permite uma avaliação da administração pelo cidadão. A prefeitura tem que apresentar um balanço do que foi realizado.</q></p>
                            <h3>ODED GRAJEW</h3>
                            <p><small>Coordenador da Rede Nossa São Paulo</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail">
                        <img src="img/thumbnail/thumb2_.jpg" alt="ETHAN ZUCKERMAN" class="img-circle">
                        <div class="caption">
                            <p><q>Monitorar governos é uma forma vital de exercermos o poder. </q><br/> </p>
                            <h3><br/>ETHAN ZUCKERMAN</h3>
                            <p><small>diretor do Center for Civic Media do MIT - Massachusetts Institute of Technology</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="jumbotron">
        <div class="container">
            <div class="col-md-offset-2 col-md-8">
                <h2 class="subtitulo promeblue centralizafonte">Veja o convite do idealizador do Promessômetro</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j4XAxhKQUXY"></iframe>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="js/funcoes.js"></script>
    <script>criarMapa();</script>
</body>
</html>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>