<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/insite.css">

    <link rel="stylesheet" href="/plugins/flex-loader/flex-loader.css">
    <script src="/plugins/flex-loader/flex-loader.js"></script>

    <link rel="stylesheet" href="/plugins/flex-modal/flex-modal.css">
    <script src="/plugins/flex-modal/flex-modal.js"></script>

    <title>Netfolio</title>
</head>

<body>


    <!--  CABECALHO !-->

    <!-- NAVBAR MENU SUPERIOR !-->

    <header>
        <a href="/">
            <img src="/img/logo.png" width="50" height="50" alt="" onclick="FlexLoader.show()">
            NETFOLIO
        </a>
        <form action="/">
            <input id="barraBusca" class="form-control me-4" type="search" name="busca" placeholder="Pesquise por uma arte ou artista..." aria-label="Search" >
            <button type="submit" onclick="FlexLoader.show()"></button>
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

    <!-- CONTEUD DO CORPO INDEX BLADE -->
    @yield('conteudo')


    
<!--  PAGINAÇAO  !-->

    <!--  RODAPE !-->
    <footer>

        <h6><span>&#169;</span> NETFOLIO 2021</h6>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    



</body>

</html>