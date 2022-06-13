<?php

require_once 'header.php';
require_once './db/conect_bd.php';

/* Paginação */
$pagina = 1;
if (isset($_GET['pagina'])) {
  $pagina = $_GET['pagina'];
}

$busca = "SELECT fabricante, veiculo, modelo FROM veiculos";
$todos = mysqli_query($conexao, "$busca");

$registros = "10";
$total_linhas = mysqli_num_rows($todos);
$total_paginas = ceil($total_linhas / $registros);

/* inicio da visualização */
$inicio = ($registros * $pagina) - $registros;
$limite = mysqli_query($conexao, "$busca LIMIT $inicio, $registros");

$anterior = $pagina - 1;
$proximo = $pagina + 1;

?>
<section>
  <section class="container pt-4 p-0">
    <table class="table table-hover table-bordered table-striped">
      <thead class="bg-secondary text-white">
        <tr>
          <th class="col-md-4">Fabricante</th>
          <th class="col-md-4">Veiculo</th>
          <th class="col-md-4">Modelo</th>
        </tr>
      </thead>
      <tbody>
        <!-- populando tabela com dados do banco de dados -->
        <?php while ($dados = mysqli_fetch_array($limite)) {
          $fabricante = $dados['fabricante'];
          $veiculo = $dados['veiculo'];
          $modelo = $dados['modelo'];
        ?>
          <tr>
            <td><?= $fabricante ?></td>
            <td><?= $veiculo ?></td>
            <td><?= $modelo ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </section>
  <ul class="pagination p-2 justify-content-center">
    <?php if ($pagina > 1) { ?>
      <li class="page-item"><a class="page-link text-dark" href="?pagina=<?= $anterior ?>">Anterior</a></li>
    <?php } ?>
    <?php
    /* Mostrando página atual */
    for ($i = 1; $i <= $total_paginas; $i++) {
      if ($pagina == $i) {
        echo "<li class='page-item'><a class='page-link text-dark' href='?pagina=$i'>$i</a></li>";
      }
    } ?>
    <?php if ($pagina < $total_paginas) { ?>
      <li class="page-item"><a class="page-link text-dark" href="?pagina=<?= $proximo ?>">Próximo</a></li>
    <?php } ?>
  </ul>
</section>