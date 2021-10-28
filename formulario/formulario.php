<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <style>
        #body{
          background-image: linear-gradient(to right, red , blue);
}
        #title{
          color:white;
          text-align:center;
          font-family:"impact";
        }
        #subtitle{
          color:white;
          text-align:center;
          opacity:50%;
        }
        
    </style>

    
</head>
<body id="body">


<h1 id="title">ENTRE EM CONTATO CONOSCO</h1>
<h4 id="subtitle">Responderemos sua mensagem o mais rápido possível</h4>
<br>

<form method="post" action="valida.php">
<div class="container">
  <div class="row">
    <div class="col">
      
    <div class="container">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_mail">
  <label for="floatingInput">Endereço de E-mail</label>
</div>
</div>

<div class="container">
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Nome aqui" name="user_nome">
  <label for="floatingPassword">Nome Completo</label>
</div>
</div>
<br>
<div class="container">
<div class="form-floating">
  <input type="number" class="form-control" id="floatingPassword" placeholder="Número" name="user_numero">
  <label for="tel">Número</label>
</div>
</div>
<br>
<div class="container">
<button  class="btn btn-warning" type="submit">Enviar</button>
</div>
    </div>
    <div class="col">
    <div class="container">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 209px" name="user_mensagem"></textarea>
  <label for="floatingTextarea">Sua Mensagem</label>
</div>
</div>
    </div>
  </div>
      </form>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>