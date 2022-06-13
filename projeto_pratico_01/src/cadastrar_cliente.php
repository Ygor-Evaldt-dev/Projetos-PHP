<?php
$sucesso = "";
if (isset($_POST['nome'], $_POST['telefone'], $_POST['data_de_nascimento'])) {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $data_de_nascimento = $_POST['data_de_nascimento'];

  if (!empty($nome) && !empty($telefone) && !empty($data_de_nascimento)) {
    $sql_code = "INSERT INTO clientes (nome, telefone, email, data_de_nascimento, data_cadastro)
    VALUES ('$nome', '$telefone', '$email', '$data_de_nascimento', NOW())";
    $enviado = $mysqli->query($sql_code);
    if ($enviado) {
      $sucesso =  'Cliente cadastrado com sucesso.';
      unset($_POST);
    }
  }
}
