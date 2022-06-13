<?php
require_once 'head.php';
require_once 'header.php';
require_once 'src/funcoes/funcao_valida_dados_cliente.php';
require_once 'src/busca_cliente.php';
/* Envia os dados para o bando de dados */
require_once("src/editar_cliente.php");

?>

<head>
  <title>Atualizar cliente</title>
</head>

<body>
  <section class="container">
    <section class="mt-5 mb-4">
      <h1 class="text-center text-capitalize">Editar cliente</h1>
    </section>
    <!-- formulário de cadastro -->
    <form class="p-4 rounded" action="" method="POST">
      <div class="mb-3">
        <label class="form-label" for="nome">Nome: <span class="erro">*</span></label>
        <input class="form-control" type="text" name="nome" id="nome" value="<?= $cliente['nome'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="telefone">Telefone: <span class="erro">*</span></label>
        <input class="form-control" type="text" name="telefone" id="telefone" value="<?= $cliente['telefone'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="email">E-mail: </label>
        <input class="form-control" type="email" name="email" id="email" value="<?= $cliente['email'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="data_de_nascimento">Data de nascimento: <span class="erro">*</span></label>
        <input class="form-control" type="date" name="data_de_nascimento" id="data_de_nascimento" value="<?= $cliente['data_de_nascimento'] ?>">
      </div>
      <div class="text-end pt-2">
        <a class="btn btn-secondary" href="lista_cliente.php">Cancelar</a>
        <button class="btn btn-success" type="submit" name="salvar">Salvar</button>
      </div>
      <div>
        <p class="sucesso"><strong><?= $sucesso ?></strong></p>
      </div>

      <?php
      /* Validado dados de cadastro */
      if (isset($_POST['nome'], $_POST['telefone'], $_POST['data_de_nascimento'])) {
        validaDados($_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['data_de_nascimento']);
      }
      ?>

    </form>
  </section>
  <?php require_once 'footer.php' ?>
  <script src="assets/js/script.js"></script>
</body>