<?php
$sucesso = "";
if (isset($_POST['nome'], $_POST['telefone'], $_POST['data_de_nascimento'])) {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $data_de_nascimento = $_POST['data_de_nascimento'];

  $sql_code = "UPDATE clientes
  SET nome = '$nome',
  telefone = '$telefone',
  email = '$email',
  data_de_nascimento = '$data_de_nascimento'
  WHERE id = '$idCliente'";
  $enviado = $mysqli->query($sql_code);
  if ($enviado) {
    $sucesso =  'Cliente Atualizado com sucesso.';
    unset($_POST);
  }
}
