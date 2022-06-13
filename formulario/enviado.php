<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="container-fluid p-4">
  <ul>
    <li>
      <p><strong>Nome:</strong> <?= $_POST['nome'] ?></p>
    </li>
    <li>
      <p><strong>Telefone:</strong> <?= $_POST['telefone'] ?></p>
    </li>
    <li>
      <P><strong>E-mail:</strong> <?= $_POST['email'] ?></P>
    </li>
  </ul>
  <p class="p-4 pt-0 pb-0">
    <strong><a href="index.php" class="link">Voltar</a></strong>
  </p>
</body>

</html>