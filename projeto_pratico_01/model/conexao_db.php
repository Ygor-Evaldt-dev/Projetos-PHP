<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'projeto_pratico_01';

$mysqli = new mysqli($host, $user, $password, $dbName);

if ($mysqli->connect_errno) {
  echo "Falha ao conectar com o banco de dados";
  return;
}
