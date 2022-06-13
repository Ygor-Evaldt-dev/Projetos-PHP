<?php
require_once 'head.php';
require_once 'header.php';
require_once 'src/funcoes/funcao_formata_nascimento.php';
require_once 'src/busca_cliente.php';
?>


<title>
  Excluir Cliente
</title>


<body>
  <section class="container-fluid p-5">
    <h2 class="text-center">Tem certeza que deseja excluir este cliente?</h2>
  </section>
  <form class="container" action="" method="POST">
    <div class="mb-4">
      <label for="nome">Nome: </label>
      <input class="form-control" type="text" name="nome" id="nome" value="<?= $cliente['nome'] ?>">
    </div>
    <div class="mb-4">
      <label for="telefone">telefone: </label>
      <input class="form-control" type="text" name="telefone" id="telefone" value="<?= $cliente['telefone'] ?>">
    </div>
    <div class="mb-4">
      <label for="email">E-mail: </label>
      <input class="form-control" type="text" name="email" id="email" value="<?= $cliente['email'] ?>">
    </div>
    <div class="mb-4">
      <label for="data_de_nascimento">Data de nascimento: </label>
      <input class="form-control" type="date" name="data_de_nascimento" id="data_de_nascimento" value="<?= $cliente['data_de_nascimento'] ?>">
    </div>
    <div class="text-end">
      <a class="btn btn-secondary" href="lista_cliente.php">Cancelar</a>
      <button name="excluir" type="submit" class="btn btn-danger" value="1">Excluir</button>
    </div>
    <?php
    require_once 'src/excluir_cliente.php';
    ?>
  </form>

  <?php
  require_once("footer.php");
  ?>
  <script src="assets/js//script.js"></script>
</body>