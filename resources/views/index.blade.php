<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Home</title>
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
                @if(session('usuario'))
                <a href="/perfil" class="nav-link">
                {{ explode(' ', session('usuario')->nome)[0] }}
                </a>
                @else
                <a href="/login" class="nav-link">Login</a>
                @endif
            </span>

        </div>
        </div>
        </div>
    </nav>


    <!--  CONTEUDO DO CORPO !-->
    <!--  DESTAQUES !-->
    <div class="info">

        <h3>DESTAQUES</h3>

        <div class="row mb-5">

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <span class="text-muted">
                                <i class="fas fa-eye col-3"></i>
                                <i class="fas fa-heart col-3"></i>
                                <i class="fas fa-comments col-3"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/2.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <span class="text-muted">
                                <i class="fas fa-eye col-3"></i>
                                <i class="fas fa-heart col-3"></i>
                                <i class="fas fa-comments col-3"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <span class="text-muted">
                                <i class="fas fa-eye col-3"></i>
                                <i class="fas fa-heart col-3"></i>
                                <i class="fas fa-comments col-3"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--  RECENTES !-->
        <div>

            <h3>NOVIDADES</h3>
        </div>
        <div class="row mb-5">

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/4.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <span class="text-muted">
                                <i class="fas fa-eye col-3"></i>
                                <i class="fas fa-heart col-3"></i>
                                <i class="fas fa-comments col-3"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <span class="text-muted">
                                <i class="fas fa-eye col-3"></i>
                                <i class="fas fa-heart col-3"></i>
                                <i class="fas fa-comments col-3"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/6.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <span class="text-muted">
                                <i class="fas fa-eye col-3"></i>
                                <i class="fas fa-heart col-3"></i>
                                <i class="fas fa-comments col-3"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--  PAGINAÇAO !-->
        <div>
            <nav class="rodape position-center " aria-label="Page navigation example">

                <ul class="pagination justify-content-center pagination-lg">
                    <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
                    <!-- Não existe anterior a primeira página -->
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item "><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
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