@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/perfil.css">


<!--  CONTEUDO DO CORPO !-->

<div class="conteudo">

    <h1>Meu Portifolio</h1>

    <!-- LINHA DE TODO CONTEUDO -->

    <div class="linha">

        <!-- BOTAO DO MODAL ADICIONAR UMA ARTE -->

        <button class="btnadd" onclick="abrirModal()" onclick="FlexLoader.show()">

            <i class="fas fa-plus"></i>
            <span>Adicionar uma Arte</span>

        </button>

        <!-- CONTEUDO DO MODAL ADICIONAR UMA ARTE -->
        <div style="display: none;">

            <form method="post" action="/arte/cadastrar" id="formenviar" enctype="multipart/form-data">
                @csrf
                <input type="text" name="titulo" placeholder="Titulo" required>
                <textarea name="descricao" placeholder="Descrição"></textarea>
                <input type="file" name="arquivo" accept= ".jpg, .png, .jpeg, .gif" placeholder="Arquivo" required>
                <button type="submit" onclick="FlexLoader.show()">Enviar</button>


            </form>

        </div>

        <!-- CAIXAS DAS ARTES -->

        <?php for ($i = 0; $i < 10; $i++) { ?>

            <div class="boxart">


                <span class="img" style="background-image: url('/img/3.jpg');"></span>

                <div class="linha">
                    <span class="datahora">26/04/2021 22:25</span>
                    <i class="fas fa-trash"></i>
                </div>

            </div>

        <?php } ?>

    </div>


</div>

<!-- SCRIPT MODAL -->

<script>
    function abrirModal() {
        FlexModal.show({
            title: "Enviar uma Arte",
            target: "#formenviar",
        });
    }
</script>

@endsection