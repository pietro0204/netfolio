<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Minha Conta</title>
</head>

<body>

    <!--  CABECALHO !-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.html">
                <img src="logo.png" width="70" height="70" alt="">
            </a>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
            </form>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item position-absolute end-0">
                        <a class="nav-link active" aria-current="page" href="acc.html">Minha Conta</a>
                    </li>
                </ul>
            </div>


        </div>
        </div>
    </nav>


    </div>
    </div>
    </nav>

    <div>

        <h3>Meu Portifolio</h3>
    </div>

    <!--  CONTEUDO DO CORPO !-->

    <!-- CARTOES DE  ARTES !-->



    <div class="row mb-5">

        <div class="col-sm-4">


        
    <!--  CARTAO 1 PARA ENVIO COM MODAL EM BOOTSTRAP !-->
            <div class="card">

                <div class="card-body">
                    <center><i class="fas fa-plus fa-6x"></i></center>
                </div>

                <!-- Botão do Modal-->
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Enviar Arte
                </a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    <!-- CARTAO 2 arte mias recente !-->
        <div class="col-sm-4">

            <div class="card">

                <div class="card-body">
                    <img src="img/1.jpg" class="card-img-top" alt="...">
                </div>

                <div class="card-footer">
                    <small class="text-muted">Data / Hora<i class="fas fa-trash-alt">
    <!-- LIXEIRA !--></i></small>
                </div>

            </div>

        </div>

        
    <!--  CARTAO 3 !-->

        <div class="col-sm-4">

            <div class="card">

                <div class="card-body">
                    <img src="img/2.jpg" class="card-img-top" alt="...">
                </div>

                <div class="card-footer">
                    <small class="text-muted">Data / Hora<i class="fas fa-trash-alt"></i></small>
                </div>

            </div>

        </div>

    </div>




    <!-- LINHA DE BAIXO !-->
    <div class="row mb-5">

    <!-- CARTAO 1 !-->
        <div class="col-sm-4">

            <div class="card">

                <div class="card-body">
                    <img src="img/3.jpg" class="card-img-top" alt="...">
                </div>

                <div class="card-footer">
                    <small class="text-muted">Data / Hora<i class="fas fa-trash-alt"></i></small>
                </div>

            </div>

        </div>

    <!-- CARTAO 2  !-->

        <div class="col-sm-4">

            <div class="card">

                <div class="card-body">
                    <img src="img/4.jpg" class="card-img-top" alt="...">
                </div>

                <div class="card-footer">
                    <small class="text-muted">Data / Hora<i class="fas fa-trash-alt"></i></small>
                </div>

            </div>

        </div>


        
    <!--  CARTAO 3 !-->
        <div class="col-sm-4">

            <div class="card">

                <div class="card-body">
                    <img src="img/5.jpg" class="card-img-top" alt="...">
                </div>

                <div class="card-footer">
                    <small class="text-muted">Data / Hora<i class="fas fa-trash-alt"></i></small>
                </div>

            </div>

        </div>

    </div>


    <!--  PAGINAÇAO NUMERAÇÂO DA PAGINA !-->
    <div>

        <nav class="rodape position-absolute-center " aria-label="Page navigation example">

            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>

        </nav>

    </div>


    <!--  RODAPE !-->

    
    <!-- NAVBAR MENU INFERIROR !-->
    <footer>

        <div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Quem Somos?</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Somos uam empresa...</a>
                        </li>

                    </ul>
                </div>


                
    <!-- REDES SOCIAIS !-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item position-absolute end-0">

                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram-square"></i>
                            <i class="fab fa-twitter-square"></i>


                        </li>
                    </ul>
                </div>

            </nav>

        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>