<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Mascara telefone -->
  <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
  <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>

  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Formulário</title>
</head>

<body class="container-fluid mt-5">
  <section class="corpo-formulario container bg-secondary p-4">
    <h1 class="text-center text-white mb-3">
      Deixe seu contato
    </h1>
    <form method="POST" action="enviado.php">
      <div class="mb-3">
        <label for="nome" class="form-label destaque-texto">Nome:</label>
        <input required type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
      </div>
      <div class="mb-3 mt-3">
        <label for="telefone" class="form-label destaque-texto">Telefone:</label>
        <input required type="phone" class="form-control" name="telefone" id="telefone" placeholder="(99) 99999-9999">
      </div>
      <div class="mb-3 mt-3">
        <label for="email" class="form-label destaque-texto">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label destaque-texto">
          <input class="form-check-input" type="checkbox" name="remember"> Salvar
        </label>
      </div>
      <button type="submit" class="btn btn-light destaque-texto">Enviar</button>
    </form>
  </section>
  <script src="assets/script/script.js"></script>
</body>


</html>