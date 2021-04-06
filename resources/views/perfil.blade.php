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


    </div>
    </div>
    </nav>

    <div class="info">
        <h3>Meu Portifolio</h3>
        <!--  CONTEUDO DO CORPO !-->
        <!--  ARTES !-->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3">
            <!--
        AQUI VOCE PODE ALTERAR
        organização dos grids responsivos:
        row-cols-2: Exibe dois cards quando a tela é < 576px
        row-cols-sm-3: Exibe tres cards quando a tela é intermediária (tables) >= 576 e < 768
        row-cols-md-2: Exibe dois cards para telas com tamanho >= 768 e < 992px
        row-cols-lg-3: Exibe três cards para telas com tamanho >= 992 e < 1200px
        row-cols-xl-3: Exibe tres cards para telas com tamanho >= 1200 e < 1400px
        row-cols-xxl-3: Exibe tres cards para telas com tamanho >= 1400
        
        -->
            <!-- AINDA NÃO DESCOBRI O PORQUE DO MODAL NÃO FUNCIONAR -->
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-plus fa-6x justify-content-center"></i>
                    </div>
                    <!-- Botão do Modal-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enviarArte">
                        Enviar Arte
                    </button>
                </div>
            </div>
            <div class="modal fade" id="enviarArte" tabindex="-1" role="dialog" aria-labelledby="enviarArteCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Clique para enviar a Arte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolores, delectus voluptatem animi eius esse quibusdam perferendis, rerum illum earum magni ad deleniti laborum fugit nobis iste itaque. Cupiditate, ducimus!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center justify-content-center">
                        <!-- INSERIDO LINHA COM 2 COLUNAS PARA ACOMODAR AS INFORMAÇÕES -->
                        <div class="row">
                            <!-- PRIMEIRA COLUNA -->
                            <div class="col">
                                Data / Hora
                            </div>
                            <!-- FIM PRIMEIRA COLUNA -->

                            <!-- SEGUNDA COLUNA -->
                            <div class="col">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                            <!-- FIM SEGUNDA COLUNA -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/2.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center justify-content-center">
                        <!-- INSERIDO LINHA COM 2 COLUNAS PARA ACOMODAR AS INFORMAÇÕES -->
                        <div class="row">
                            <!-- PRIMEIRA COLUNA -->
                            <div class="col">
                                Data / Hora
                            </div>
                            <!-- FIM PRIMEIRA COLUNA -->

                            <!-- SEGUNDA COLUNA -->
                            <div class="col">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                            <!-- FIM SEGUNDA COLUNA -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center justify-content-center">
                        <!-- INSERIDO LINHA COM 2 COLUNAS PARA ACOMODAR AS INFORMAÇÕES -->
                        <div class="row">
                            <!-- PRIMEIRA COLUNA -->
                            <div class="col">
                                Data / Hora
                            </div>
                            <!-- FIM PRIMEIRA COLUNA -->

                            <!-- SEGUNDA COLUNA -->
                            <div class="col">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                            <!-- FIM SEGUNDA COLUNA -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/4.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center justify-content-center">
                        <!-- INSERIDO LINHA COM 2 COLUNAS PARA ACOMODAR AS INFORMAÇÕES -->
                        <div class="row">
                            <!-- PRIMEIRA COLUNA -->
                            <div class="col">
                                Data / Hora
                            </div>
                            <!-- FIM PRIMEIRA COLUNA -->

                            <!-- SEGUNDA COLUNA -->
                            <div class="col">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                            <!-- FIM SEGUNDA COLUNA -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer text-center justify-content-center">
                        <!-- INSERIDO LINHA COM 2 COLUNAS PARA ACOMODAR AS INFORMAÇÕES -->
                        <div class="row">
                            <!-- PRIMEIRA COLUNA -->
                            <div class="col">
                                Data / Hora
                            </div>
                            <!-- FIM PRIMEIRA COLUNA -->

                            <!-- SEGUNDA COLUNA -->
                            <div class="col">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                            <!-- FIM SEGUNDA COLUNA -->
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