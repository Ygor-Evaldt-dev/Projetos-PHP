<?php
require_once 'head.php';
require_once 'header.php';
require_once 'src/funcao_lista_cliente.php';
require_once 'src/funcoes/funcao_formata_nascimento.php';
require_once 'src/funcoes/funcao_formata_cadastro.php';
?>

<head>
  <title>
    Lista De Clientes
  </title>
</head>

<body>
  <header class="container-fluid">
    <h1 class="text-center text-capitalize p-5">
      Lista de clientes
    </h1>
  </header>
  <section class="container table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr class="tabela bg-secondary text-white">
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Data de nascimento</th>
          <th>Data de Cadastro</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>

        <?php
        while ($dados = mysqli_fetch_array($limite)) {
          $id = $dados['id'];
          $nome = $dados['nome'];
          $telefone = $dados['telefone'];
          $email = $dados['email'];
          $dataDeNascimento = $dados['data_de_nascimento'];
          $dataDeCadastro = $dados['data_cadastro'];
          if (!$totalClientes) {
            echo "Nenhum cliente cadastrado";
          }
          /* Formatando data de nascimento para exibir na tabela */
          $dataDeNascimento = formataNascimento($dataDeNascimento);
          /* Formatando hora do cadastro */
          $dataDeCadastro = formataDataCadastro($dataDeCadastro);

        ?>
          <tr>
            <td><?= $id ?></td>
            <td><?= $nome ?></td>
            <td><?= $telefone ?></td>
            <td><?= $email ?></td>
            <td><?= $dataDeNascimento ?></td>
            <td><?= $dataDeCadastro ?></td>
            <td class="d-flex justify-content-around">
              <a class="btn btn-primary p-1 pb-0 m-1 mt-0 mb-0" href="edita_cliente.php?id=<?= $dados['id'] ?>">Editar</a>
              <a class="btn btn-danger p-1 pb-0" href="exclui_cliente.php?id=<?= $dados['id'] ?>">Excluir</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <ul class="pagination d-flex justify-content-center">
      <?php if ($pagina > 1) { ?>
        <li class="page-item"><a class="page-link" href="?pagina=<?= $anterior ?>">Anterior</a></li>
      <?php } ?>
      <?php for ($i = 1; $i <= $totalDePaginas; $i++) {
        if ($pagina == $i) {
          echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
        }
      }
      ?>
      <?php if ($pagina < $totalDePaginas) { ?>
        <li class="page-item"><a class="page-link" href="?pagina=<?= $proximo ?>">Próximo</a></li>
      <?php } ?>
    </ul>
  </section>
  <?php require_once("footer.php") ?>
</body>