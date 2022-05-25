<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- formulário - valída-telefone -->
  <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
  <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>

  <title>Portfólio - Ygor Evaldt</title>
</head>

<body>
  <!-- Cabeçalho -->
  <header class="container-fluid p-0" id="inicio">
    <nav class="header-navegacao navbar navbar-expand-lg bg-dark navbar-dark p-4 align-items-center">
      <div class="container-fluid">
        <a class="header-logo navbar-brand hover" href="#inicio">Ygor Evaldt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navegação -->
        <div class="collapse navbar-collapse text-end justify-content-between" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white hover" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white hover" href="#portfolio">Portfólio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white hover" href="#sobre">Sobre</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white hover" href="#contato">Deixe seu contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="https://api.whatsapp.com/send/?phone=5551983313468&text&app_absent=0" target="_blank"><i class="bi bi-whatsapp text-white hover"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="https://www.linkedin.com/in/ygor-evaldt-6479b2220/" target="_blank"><i class="bi bi-linkedin hover "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="https://github.com/Ygor-Evaldt-dev" target="_blank"><i class="bi bi-github hover"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- foto de perfil -->
    <section class="container-fluid bg-secondary p-4 text-center">
      <img class="header-foto-perfil img-fluid rounded-circle" src="assets/img/foto-perfil.jpg" alt="foto de perfil">
      <p class="header-paragrafo text-capitalize text-center text-white pt-4">
        Desenvolvedor web full-stack
      </p>
    </section>
  </header>
  <!-- Conteúdo -->
  <section class="container-fluid p-0">
    <!-- como me encontrar -->
    <section class="contato container-fluid text-center pt-5 pb-5">
      <h2 class="text-capitalize pb-5">
        Como me encontrar
      </h2>
      <p class="pb-4">
        Estou disponível para ser contatado através das seguintes plataformas
      </p>
      <ul class="nav d-flex justify-content-center pb-4">
        <li class="nav-item">
          <a class="nav-link text-dark hover2" href="https://api.whatsapp.com/send/?phone=5551983313468&text&app_absent=0" target="_blank"><i class="bi bi-whatsapp"></i> Whatsapp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark hover2" href="https://www.linkedin.com/in/ygor-evaldt-6479b2220/" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark hover2" href="https://github.com/Ygor-Evaldt-dev" target="_blank"><i class="bi bi-github"></i> GitHub</a>
        </li>
      </ul>
    </section>
    <!-- portfólio -->
    <main class="container-fluid bg-secondary pt-5 pb-5" id="portfolio">
      <h2 class="text-capitalize text-center text-white pb-4">
        Portfólio
      </h2>
      <div class="portfolio row">
        <section class="portfolio-item col-md-4 m-0">
          <a href="https://ygor-evaldt-dev.github.io/portfolio-lobo/" target="_blank">
            <img class="img-fluid rounded" src="assets/img/port-lobo.jpeg" alt="">
          </a>
        </section>
        <section class="portfolio-item col-md-4">
          <a href="https://ygor-evaldt-dev.github.io/bickrafit/" target="_blank">
            <img class="img-fluid rounded" src="assets/img/bickraft.jpeg" alt="">
          </a>
        </section>
        <section class="portfolio-item col-md-4">
          <a href="https://ygor-evaldt-dev.github.io/projeto-tabela-UEFA/" target="_blank">
            <img class="img-fluid rounded" src="assets/img/tabela-uefa.jpeg" alt="">
          </a>
        </section>
      </div>
    </main>
    <!-- sobre -->
    <section class="sobre container-fluid p-5" id="sobre">
      <h2 class="text-capitalize text-center pb-4">
        Sobre
      </h2>
      <div class="row">
        <section class="col-md-6">
          <p>
            Estudante do curso de Análise e Desenvolvimento de Sistemas na Ulbra Torres RS.
            Buscando novas oportunidades para atuar na área de TI como desenvolvedor e adquirir cada vez mais novos conhecimentos e habilidades, procuro sempre me inovar, tendo uma boa interatividade com meu grupo de trabalho, sempre que possível agregando novas ideias ao projeto.
          </p>
        </section>
        <section class="col-md-6">
          <dl>
            <dt class="text-capitalize">Trabalho Atual</dt>
            <dd class="text-capitalize pb-1">Desenvolvedor web full-stack</dd>
            <dt class="text-capitalize">Empresa</dt>
            <dd class="text-capitalize pb-1">Hugs agência de publicidade</dd>
            <dt class="text-capitalize">Principais atividades</dt>
            <dd class="">Desenvolvimento e manutenção de sites</dd>
            <dd class="">Gestão e criação de campanhas no Facebook ADS</dd>
            <dd class="">Gestão e criação de campanhas no Google ADS</dd>
            <dd>Gestão de trafego pago - SEO</dd>
          </dl>
        </section>
      </div>
    </section>
  </section>
  <!-- Formulário -->
  <section class="formulario container bg-secondary rounded p-5 mb-5" id="contato">
    <h2 class="text-white text-center">
      Deixe seu contato
    </h2>
    <form action="email.php" method="POST" class="p-2">
      <div class=" mb-3 mt-3">
        <label for="email" class="form-label text-white">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label text-white">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" placeholder="Telefone" name="telefone">
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label text-white">E-mail:</label>
        <input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
      </div>
      <button type="submit" class="houver btn text-white bg-dark hover">enviar</button>
    </form>
  </section>
  <!-- rodapé -->
  <footer class=" footer container-fluid bg-dark pt-5 pb-2">
    <section class="footer-section d-flex justify-content-around">
      <section class="text-white text-center flex-fill col-md-4">
        <h4>
          Três Cachoeiras - RS
        </h4>
        <p>
          Rua Remir Raupp Machado 419<br>
          Santa Rita
        </p>
      </section>
      <section class="text-white text-center flex-fill col-md-4">
        <h4>
          Na Web
        </h4>
        <section class="d-flex justify-content-center">
          <a href="https://api.whatsapp.com/send/?phone=5551983313468&text&app_absent=0" class="p-1 link-footer"><i class="bi bi-whatsapp"></i></a>
          <a href="https://www.linkedin.com/in/ygor-evaldt-6479b2220/" class="p-1 link-footer"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/Ygor-Evaldt-dev" class="p-1 link-footer"><i class="bi bi-github"></i></a>
        </section>
      </section>
      <section class="text-white text-center flex-fill col-md-4">
        <h4>
          Mais sobre mim
        </h4>
        <p class="">
          Sou um desenvolvedor apaixonado por tecnologia e o poder que ela tem sobre a qualidade de vida das pessoas.
          Pra mim nada melhor do que um bom desafio para me fazer evoluir cada vez mais como profissional e como pessoa.
          Eai, bora trabalhar juntos?
        </p>
      </section>
    </section>
    <section class="d-flex justify-content-center align-items-center">
      <p class="text-white p-4 m-0">
        Copyright © Ygor Evaldt 2022
      </p>
      <a href="#inicio"><i class="bi bi-arrow-up-square-fill text-white h3 hover" id="inicio"></i></a>
    </section>
  </footer>
  <script src=" assets/script/script.js">
  </script>
</body>

</html>