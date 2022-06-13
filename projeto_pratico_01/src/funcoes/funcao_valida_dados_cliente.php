<?php
require_once("./model/conexao_db.php");

/* Validando dados para cadastro de cliente */
function validaDados($nome, $telefone, $email, $data_de_nascimento): void
{
  /* Valida nome */
  if (mb_strlen($nome) <= 2 || mb_strlen($nome) > 100) {
    if (empty($nome)) {
      echo '<p class = "erro"><strong>O campo nome é obrigatório.</strong></p>';
      return;
    }
    echo '<p class = "erro"><strong>Nome inválido.</strong></p>';
    return;
  }

  /* Valida telefone */
  if (mb_strlen($telefone) < 15 || mb_strlen($telefone) > 50) {
    if (empty($telefone)) {
      echo '<p class = "erro"><strong>O campo telefone é obrigatório.</strong></p>';
      return;
    }
    echo '<p class = "erro"><strong>Telefone inválido.</strong></p>';
    return;
  }

  /* Valida email */
  if (empty($email)) {
    $email = "";
    return;
  }
  if (mb_strlen($email) > 60 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<p class = "erro"><strong>E-mail inválido.</strong></p>';
    return;
  }

  /* Valida data de nascimento */
  if (mb_strlen($data_de_nascimento) > 10 || mb_strlen($data_de_nascimento) < 10) {
    if (empty($data_de_nascimento)) {
      echo '<p class = "erro"><strong>O campo data de nascimento é obrigatório.</strong></p>';
      return;
    }
    echo '<p class = "erro"><strong>Data de nascimento inválida.</strong></p>';
    return;
  }
  /* formatando data de nascimento - padrão americano para o BD */
  $temporaria = explode('/', $data_de_nascimento);
  $data_de_nascimento = implode('-', array_reverse($temporaria));
}
