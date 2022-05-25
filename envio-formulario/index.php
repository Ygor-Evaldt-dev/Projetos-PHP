<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Formatação telefone -->
  <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
  <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>

  <title>Envio de formulário</title>
</head>

<body>
  <!-- cabeçalho -->
  <header class="container-fluid p-4 bg-primary">
    <h1 class="text-center text-white text-capitalize">
      Formulário de contato com PHP
    </h1>
  </header>
  <!-- formulário -->
  <div class="container mt-5">
    <h1>
      Entre em contato
    </h1>
    <form action="index.php" method="POST">
      <div class="mb-3 mt-3">
        <label for="nome" class="form-label">Nome:</label>
        <input required type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input required type="phone" class="form-control" id="telefone" placeholder="(DD) 9 9999-9999)" name="telefone">
      </div>
      <div class="mb-3 mt-3">
        <label for="email" class="form-label">E-mail:</label>
        <input required type="email" class="form-control" id="email" placeholder="E-mail" name="email">
      </div>
      <div class="form-radio mb-3">
        <label for="genero" class="form-label">Genero:</label>
        <input class="form-check-input" type="radio" name="genero" value="Masculino"> Masculino
        <input class="form-check-input" type="radio" name="genero" value="Feminino"> Feminino
        <input class="form-check-input" type="radio" name="genero" value="Outro"> Outro
      </div>
      <button type="submit" name="enviado" class="btn btn-primary">Enviar</button>
    </form>
    <!-- Dados preenchidos -->
    <section class="mt-4 mb-5">
      <h2 class="text-capitalize mb-4">
        Dados prenechidos:
      </h2>
      <!-- Validando dados do formulário -->
      <?php
      $genero = "Não selecionado";
      if (isset($_POST['genero'])) {
        $genero = $_POST['genero'];
      }
      if (isset($_POST['nome'], $_POST['telefone'], $_POST['email'], $genero)) {
        require_once 'src/funcoes.php';
        validaDados($_POST['nome'], $_POST['telefone'], $_POST['email'], $genero);
      }
      ?>
    </section>
  </div>
  <!-- Rodapé -->
  <footer class="container-fluid bg-primary p-2">
    <p class="text-end text-white p-2 pt-0 pb-0">
      Desenvolvido por: <a target="_blanck" class="link-github text-white" href="https://github.com/Ygor-Evaldt-dev"> Ygor Evaldt</a>
    </p>
  </footer>
  <script src="assets/script/script.js"></script>
</body>

</html>