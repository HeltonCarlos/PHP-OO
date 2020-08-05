<?php
        include_once './conexao.php';
        session_start();
        ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario</title>
</head>
<body>


<section>
    <?php 
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    }
    ?>
    
  <h1>FORMULARIO</h1>
      <form method="POST" action="procad.php">
        <label>Nome Completo</label>
        <input type="text" name="nome" id="nome" placeholder="ex:Joao Marcos Souza ">

        <label>E-mail</label>
        <input type="email" name="email" id="email" placeholder="ex:joao@hotmail.com">

        <label>Assunto</label>
        <input type="text" name="assunto" id="assunto" placeholder="ex:reclamação,elogios,agradecimentos...">

        <label>Texto</label>
       <textarea name="mensagem" rows="3" cols="50" placeholder="mensagem"></textarea>  
       
       <input type="button" name="SendCadCount" value="Cadastrar" onclick="Enviar()">
      </form>


</section>



    <script src="app.js"></script>
</body>
</html>