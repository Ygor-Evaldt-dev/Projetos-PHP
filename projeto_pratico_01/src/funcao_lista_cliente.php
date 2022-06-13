<?php
require_once("./model/conexao_db.php");

/* Exibindo Dados na tabela */
if (empty($_GET['pagina'])) {
  $_GET['pagina'] = 1;
}
$pagina = $_GET['pagina'];
$busca = "SELECT * FROM clientes ORDER BY id ASC";
$totalClientes = mysqli_query($mysqli, "$busca");
$registros = 10;

// quantidade linhas tabela por página
$linhasTabela = mysqli_num_rows($totalClientes);
$totalDePaginas = ceil($linhasTabela / $registros);
$inicio = ($registros * $pagina) - $registros;
$limite = mysqli_query($mysqli, "$busca LIMIT $inicio, $registros");

$anterior = $pagina - 1;
$proximo = $pagina + 1;
