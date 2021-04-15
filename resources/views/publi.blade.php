<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/indexperfil.css">
    <link rel="stylesheet" href="/plugins/flex-modal/flex-modal.css">
    <script src="/plugins/flex-modal/flex-modal.js"></script>
    <link rel="stylesheet" href="/plugins/flex-loader/flex-loader.css">
    <script src="/plugins/flex-loader/flex-loader.js"></script>

    <title>Publicação</title>
</head>

<body>

    <!--  CABECALHO !-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" width="70" height="70" alt="">
                NETFOLIO
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-4" type="search" placeholder="Pesquisar..." aria-label="Search">
                    </form>
                </li>
            </ul>


            <span class="navbar-text">
                @if(session('usuario'))
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/perfil" class="nav-link">
                            {{ explode(' ', session('usuario')->nome)[0] }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Sair</a>
                    </li>
                </ul>
                @else
                <a href="/login" class="nav-link">Login</a>
                @endif
            </span>

        </div>
        </div>
        </div>
    </nav>


    </div>
    </div>
    </nav>

    <!-- Cartão de Publicação -->

    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

    <!-- Rodape -->

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

    <script>
        function abrirModal() {
            FlexModal.show({
                title: "Enviar uma Arte",
                target: "#cardfirst",
            });
        }
    </script>

</body>

</html>