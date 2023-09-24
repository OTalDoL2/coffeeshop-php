<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">.Coffee</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->







<?php
    function statusPagina($pagina) {
        $classeRetorno = '';
        switch($pagina){
            case "/":
                $classeRetorno = strstr($_SERVER['REQUEST_URI'], '/index.php') ? 'active' : '';
                break; 
            case "sobre":
                $classeRetorno = strstr($_SERVER['REQUEST_URI'], '/sobre.php') ? 'active' : '';
                break; 
            case "contato":
                $classeRetorno = strstr($_SERVER['REQUEST_URI'], '/contato.php') ? 'active' : '';
                break; 
        }
        return $classeRetorno;
    }
?>







<!-- navbar.php -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">.Coffee</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link <?=statusPagina('/') ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?=statusPagina('sobre') ?>" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=statusPagina('contato') ?>" href="contato.php">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
