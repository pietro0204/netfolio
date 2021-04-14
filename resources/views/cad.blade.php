<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cad.css">


    <title>Cadastro</title>
</head>

<body>


    <!-- <!-- CABECALHO 
    <!-- MENU SUPERIOR NAVBAR  

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" width="70" height="70" alt="">
            </a>
           

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
            </form>

            <span class="navbar-text">
                <a href="/login" class="nav-link"><button type="button">LOGIN</button></a>
            </span>
        </div>
        </div>
        </div>
    </nav> !-->



    <!-- CARTAO DE FORMULARIO PARA CADASTRO !-->

    <center>


        <div class="card" style="width: 18rem;">

            <div class="card-body">

                <!-- FORMULARIO DO CADASTRO COM HTML !-->

                <form action="/cadusuario" method="post">
                    <h3>CADASTRO</h3>
                    @csrf
                    <input type="text" name="nome" placeholder="@Nome de Usuario" required>
                    <input type="text" name="email" placeholder="E-mail" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <input type="password" name="confirmesenha" placeholder="Confirmar Senha" required>
                    <button type="submit">CADASTRAR</button>
                    <a href="/login" class="nav-link">Já sou cadastrado!</a>

                </form>


            </div>
        </div>

    </center style="padding: 80px;">


    <!-- <!--  RODAPE 


    <!-- MENU NAVBAR INFERIOR  
    <footer>

        <div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <span class="navbar-text">
                    <a href="#" class="nav-link"><span>&#169;</span> NETFOLIO. Seu portifolio na Web.</a>
                </span>
        </div>
        </div>
        </nav>

        </div>
    </footer> !-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>