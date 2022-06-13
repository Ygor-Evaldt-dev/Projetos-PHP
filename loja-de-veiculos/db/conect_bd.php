<?php

// estabelecendo conecão com o banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "teste";

$conexao = mysqli_connect($host, $usuario, $senha, $nome_bd);

// Verificando conexão com Banco de dados
if (!$conexao) {
  echo "Falha ao conectar ao banco de dados";
}
