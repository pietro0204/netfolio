@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/perfil.css">


<!--  CONTEUDO DO CORPO !-->

<div class="conteudo">

    <!-- LINHA DO PERFIL MENU DE EDIÇAO FOTO E BIOGRAFIA -->
    <div class="linha">
        <div class="perfil">



            <img src="{{ session('usuario')->fotousu }}" alt=""><!-- IMAGEM DO PERFIL-->



            <span>
                <h1>{{ session('usuario')->nome }}</h1>
                <h2>{{ session('usuario')->bio }}</h2>
            </span>

            <!-- BOTAO EDITAR IMAGEM / PERFIL-->
            <button class="editBio" onclick="abrirModalEditBio()" onclick="FlexLoader.show()">
                <i class="fas fa-edit"></i>
            </button>

            <!-- CONTEUDO DO MODAL EDITAR UMA ARTE -->
            <div style="display: none;">

                <form method="post" action="/perfil/editar" id="editBio" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="arquivo" accept=".jpg, .png, .jpeg, .gif" placeholder="Arquivo" required>
                    <input type="text" name="nome" value="{{ session('usuario')->nome }}" required>
                    <textarea name="biografia" value="{{ session('usuario')->bio }}" placeholder="Biografia"></textarea>
                    <button type="submit" onclick="FlexLoader.show()">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- PORTFOLIO -->
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
                <input type="file" name="arquivo" accept=".jpg, .png, .jpeg, .gif" placeholder="Arquivo" required>
                <button type="submit" onclick="FlexLoader.show()">Enviar</button>
            </form>
        </div>

        <!-- CAIXAS DAS ARTES -->

        <?php foreach ($artes as $a) { ?>

            <div class="boxart">


                <a href="/publi?id=<?php echo $a->id ?>" onclick="FlexLoader.show()"><img src="<?php echo ($a->arquivo); ?>" alt=""></a>

                <div class="linha">
                    <span class="datahora"><?php echo $a->datahora;  ?></span>
                    <!-- BOTOES -->

                    <!-- Editar -->
                    <div class="editaExclui" onclick="abrirModalEditar(this)" onclick="FlexLoader.show()">
                        <i class="fas fa-edit"></i>
                        <div style="display: none;">
                            <!-- CONTEUDO DO MODAL EDITAR ARTE -->

                            <form method="post" action="/arte/editar" id="formeditar" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $a->id }}">
                                <input value="<?php echo $a->titulo ?>" type="text" name="titulo" placeholder="Titulo" required>
                                <textarea name="descricao" placeholder="Descrição"><?php echo $a->descricao ?></textarea>
                                <button type="submit" onclick="FlexLoader.show()">Salvar</button>
                            </form>
                        </div>
                    </div>

                    <!-- Excluir -->
                    <a href="/arte/excluir?id=<?php echo $a->id; ?>" class="editaExclui"><i class="fas fa-trash"></i></a>
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

    function abrirModalEditar(botaoclicado) {
        FlexModal.show({
            title: "Editar Arte",
            target: botaoclicado.querySelector('#formeditar')
        })

    }

    function abrirModalEditBio(botaoeditbio) {
        FlexModal.show({
            title: "Editar Perfil",
            target: '#editBio',
        })

    }
</script>

@endsection