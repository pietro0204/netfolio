<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/insite.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/plugins/flex-loader/flex-loader.css">
    <script src="/plugins/flex-loader/flex-loader.js"></script>

    <title>Netfolio</title>
</head>

<body>


    <!--  CABECALHO !-->

    <!-- NAVBAR MENU SUPERIOR !-->

    <header>
        <a href="/">
            <img src="/img/logo.png" width="50" height="50" alt="">
            NETFOLIO
        </a>
        <form>
            <input id="barraBusca" class="form-control me-4" type="search" name="busca" placeholder="Pesquise por uma arte ou artista..." aria-label="Search">
            <button type="submit"></button>
        </form>

        @if(session('usuario'))

        <a href="/perfil" onclick="FlexLoader.show()">
            {{ explode(' ', session('usuario')->nome)[0] }}
        </a>

        <a href="/login" onclick="FlexLoader.show()">Sair</a>

        @else
        <a href="/login" onclick="FlexLoader.show()">Login</a>
        @endif

    </header>


    <!--  CONTEUDO DO CORPO !-->



    <div id="conteudo">
        <div class="titulo">
            <h1>Destaques</h1> <!-- TITULO 1 LINHA -->
        </div>

        <!-- CARTOES -->
        <?php for ($i = 1; $i <= 4; $i++) { ?>

            <div class="boxpubli">
               <img src="/img/3.jpg" alt="">
                
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                
            </div>
        <?php } ?>

    </div>

    <div id="conteudo">
        <div class="titulo">
            <h1>Novidades</h1> <!-- TITULO 2 LINHA -->
        </div>

        <!-- CARTOES -->
        <?php for ($i = 1; $i <= 4; $i++) { ?>

            <div class="boxpubli">
               <img src="/img/3.jpg" alt="">
                
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                
            </div>
        <?php } ?>

    </div>


    <!--  PAGINAÇAO !-->
    <div>
        <div class="rodape position-center " aria-label="Page navigation example">

            <ul class="pagination justify-content-center pagination-lg">
                <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
                <!-- Não existe anterior a primeira página -->
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item "><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item "><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
    </div>

    <!--  RODAPE !-->
    <footer>

        <h6><span>&#169;</span> NETFOLIO 2021</h6>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>