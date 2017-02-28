<?php

// A função a baixo bloqueia o acesso direto a este arquivo (para que um invasor não possa examinar o aplicativo /views/_templates/header.php).
// "$this" só existe se header.php é carregado a partir do aplicativo, mas não se este arquivo aqui for chamado diretamente.
// Se alguém chamou header.php diretamente nós paramos completamente tudo via exit() e enviamos um código de status do servidor 403.
// Certifique-se também de que não existem espaços, etc. antes de "<!DOCTYPE>", pois isso pode quebrar a renderização da página.

if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
}

?><!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- JS -->
    <!-- Os arquivos JavaScript estão no rodapé da página _templates/footer.php -->

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">

    <title>PHP MVC</title>

    <!-- Início do menu -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo URL_WITH_INDEX_FILE; ?>">
            <img src="<?php echo URL; ?>public/img/logo-php.png" alt="PHP" width="30" height="30">
          </a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active" id="new">
            <a href="<?php echo URL_WITH_INDEX_FILE; ?>songs/">Músicas</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Fim do menu -->
  </head>

  <!-- Início do body -->
  <body>
    <!-- Início do contúdo da página -->
    <div class="container">