@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/perfil.css">

<!--  CONTEUDO DO CORPO !-->

<div class="conteudo">


<div class="editarperfil">

<img src="/img/1.jpg" width="100" height="100"> foto do perfil

<form action="">
<input type="text">biografia
</form>

<i class="fas fa-comment"></i> icone de editar

</div>

    <div class="titulo">
        <h3>Meu Portifolio</h3>

    </div>


<!-- CARTAO DE ENVIAR ARTE -->
    <div class="boxenviar">
        <i class="fas fa-plus fa-6x justify-content-center"></i>

        <!-- Botão do Modal-->
        <button type="button" onclick="abrirModal()" onclick="FlexLoader.show()">
            Enviar Arte
        </button>
    
   



    <div style="display: none;">
        <div id="cardfirst">
            <form class="formenviar">
                <input type="file" name="arquivo" placeholder="Arquivo" required>
                <input type="text" name="titulo" placeholder="Titulo" required>
                <input type="text" name="descricao" placeholder="Descricao" required>
                <button type="submit" onclick="FlexLoader.show()">Enviar</button>


            </form>

        </div>

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

    @endsection