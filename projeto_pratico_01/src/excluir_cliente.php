<?php

if (isset($_POST['excluir'])) {
  $buscaDoCliente = "DELETE FROM clientes WHERE id = '$idCliente'";
  $queryDoCliente = $mysqli->query($buscaDoCliente);
  if ($queryDoCliente) { ?>
    <p class="erro"><strong>Cliente excluido com sucesso</strong></p>
    <p>Clique <a href="lista_cliente.php">aqui</a> para voltar a lista de clientes</p>
<?php }
} ?>