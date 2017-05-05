@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
  <title>Contato</title>

     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     
</head>
<body>        
  <section>
    <div class="middlecenter-cadastra">
      <div class="row">
        <div class="col-md-12">
          <h1 class="titulo promeblue">Fale Conosco</h1>       
        </div>
          <div class="col-md-12">

            <div class="col-md-6 rightline">

              <P class="subtitulo2"><Strong>Junte-se a nós!</Strong></p>
              <p class="texto">Contate-nos para também ser um <strong>auditor cidadão</strong>, esclarecer dúvidas, enviar sugestões, críticas e/ou melhorias.</p>
              <p class="texto">Sua <strong>organização / empresa</strong> pode ser nossa <strong>PARCEIRA.</strong></p>
              <font class="subtitulo2 promeblue-claro"><strong>Promessômetro</strong></font>
              <br>
              <font class="texto"><strong>auditores cidadãos</strong></font>
              <br><br>
              <font class="subtitulo3 promeblue-claro"><strong>vilela@promessometro.org</strong></font>
              <br>
              <img src="img/whatsapp.png">
              <font class="subtitulo3">+55 19 9 8161-9281</font>

            </div>

            <div class="col-md-6 p-fifty">

              <form action = "contato" method="post">

                <font class="subtitulo3 promeblue-claro"><strong>Nome:</strong></font>
                <br>
                <input class="inputnormal input" type="text">
                <br><br>
                <font class="subtitulo3 promeblue-claro"><strong>Email:</strong></font>
                <br>
                <input class="inputnormal input" type="text">
                <br><br>
                <font class="subtitulo3 promeblue-claro"><strong>Telefone / Whatsapp:</strong></font>
                <br>
                <input class="inputnormal input" type="text">
                <br><br>
                <font class="subtitulo3 promeblue-claro"><strong>Organização que representa:</strong></font>
                <br>
                <input class="inputnormal input" type="text">
                <br><br>
                <font class="subtitulo3 promeblue-claro"><strong>Mensagem, dúvidas, sugestões, críticas:</strong></font>
                <br>
                <input class="inputtext input" type="text">
                <br><br>
                <input type="submit" value="Enviar" class="btn-primary btn-pad"></input>
                
              </form>

            </div>

          </div>
      </div>  
    </div>
  </section>

   
    </body>
    </html>