<?php
$idCliente = intval($_GET['id']);

$buscaCliente = "SELECT * FROM clientes WHERE id = '$idCliente'";
$queryCliente = $mysqli->query($buscaCliente);
$cliente = $queryCliente->fetch_assoc();
