<?php
require_once 'head.php';
?>

<body>
  <nav class="navbar navbar-expand-sm bg-primary p-2 navbar-dark">
    <div class="container-fluid hover">
      <a class="navbar-brand p-2" href="index.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="header-ul navbar-nav nav justify-content-end">
          <li class="nav-item hover">
            <a class="nav-link text-end text-white" href="lista_cliente.php">Lista de clientes</a>
          </li>
          <li class="nav-item hover">
            <a class="nav-link text-end text-white" href="cadastro_cliente.php">Cadastrar cliente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>