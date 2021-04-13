<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/cad.css">



  <title>Login</title>
</head>

<body>
  <!--  CABECALHO !-->

  <!-- NAVBAR MENU SUPERIOR !-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="/img/logo.png" width="70" height="70" alt="">
      </a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
      </form>

      <span class="navbar-text">
        <a href="acc.html" class="nav-link">Minha Conta</a>
      </span>
    </div>
    </div>
    </div>
  </nav>


  <!-- CONTEUDO DE  CORPO !-->


  <!-- CARTAO DE FORMULARIO PARA CADASTRO !-->

  <center class="login">


    <div class="card" style="width: 18rem;">

      <div class="card-body">

        <!-- FORMULARIO DO CADASTRO COM HTML !-->

        <form action="/logar" method="post">
          <h3>LOGIN</h3>
          @csrf

          <input type="text" name="email" placeholder="E-mail" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <button type="submit">LOGIN</button>

        </form>


      </div>
    </div>

  </center>


  <!--  RODAPE !-->


  <!-- MENU NAVBAR INFERIOR  !-->
  <footer>

    <div>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-text">
          <a href="#" class="nav-link"><span>&#169;</span> NETFOLIO Todos os direitos reservados.</a>
        </span>
    </div>
    </div>
    </nav>

    </div>
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>