<?php

/* Validando dados do formulário */
function validaDados(string $nome, string $telefone, string $email, string $genero): void
{
  if (mb_strlen($nome) < 3 || mb_strlen($nome) > 100) {
    echo '<p class="erro">O nome inserido é inválido</p>';
    return;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 30) {
    if (empty($email)) {
      echo '<p class="erro">Preencha o campo E-mail.<\p>';
    }
    echo '<p class="erro">Digite um e-mail válido</p>';
    return;
  }
  if (mb_strlen($telefone) < 15 || mb_strlen($telefone) > 15) {
    echo '<p class="erro">O número de telefone inserido é inválido</p>';
    return;
  }
  if ($genero != 'Masculino' && $genero != 'Feminino' && $genero != 'Outro' && $genero != 'Não selecionado') {
    echo '<p class="erro">Gênero inválido</p>';
    return;
  }
  echo "<p><strong>Nome: </strong>$nome</p>";
  echo "<p><strong>Telefone: </strong>$telefone</p>";
  echo "<p><strong>E-mail: </strong>$email</p>";
  echo "<p><strong>Genero: </strong>$genero</p>";
}
