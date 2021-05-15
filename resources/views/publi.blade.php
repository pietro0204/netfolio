@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/publi.css">

<!-- CONTEUDO DO CORPO -->


<div class="conteudo">

    <!-- LINHA DO AUTOR DA ARTE -->

    <div class="linha boxautor">
        <img src="{{ $user->fotousu }}" alt=""><!-- IMAGEM DO PERFIL-->


        <span>

            <h1>{{ $arte->titulo }}</h1>
            <h2>por {{ $user->nome }} em {{ $arte->datahora }}</h2>

        </span>

    </div>

    <!-- LINHA DA CAIXA DE PUBLICAÇÂO -->

    <div class="boxpubli">
        <!-- IMAGEM -->
        <span class="img" style="background-image: url('{{ $arte->arquivo }}');"></span>
        <!-- COLUNA DOS ICONES E COMENTARIOS -->
        <div class="coluna">
            <!-- ICONES-->
            <div class="icones">
                <div>
                    <i class="fas fa-eye"></i>
                    <span>100</span>
                </div>

                <div>
                    <i class="fas fa-heart"></i>
                    <span>100</span>
                </div>
                <div>
                    <i class="fas fa-comment"></i>
                    <span>100</span>
                </div>

            </div>

            <div class="boxrolagem">
                <!-- ROLAGEM DOS COMENTARIOS-->

                <!-- DESCRIÇÂO DA ARTE FEITA PELO ARTISTA-->

                <span class="boxdescri">
                    {{ $arte->descricao }}
                </span>

                <!-- CAIXA PARA TODOS OS COMENTARISO -->

                <div class="boxTodosComentario">

                    <?php for ($i = 1; $i < 5; $i++) { ?>

                        <div class="boxComent">
                            <!-- CAIXA DE COMENTAIRO -->

                            <div class="linha boxautor comentario">
                                <!-- LINHA AUTOR DO COMENTARIO -->
                                <i class="fas fa-user-circle"></i>

                                <span>

                                    <h1>Nome Usuario</h1>
                                    <h2>em 28/04/2021 as 19:35</h2>

                                </span>

                            </div>
                            <div class="texto">
                                <!-- TEXTO DO COMENTARIO -->
                                It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                            </div>
                            <hr>
                        </div>

                    <?php } ?>

                </div>
            </div>

            <!-- LINHA DO FORMULARIO PARA ENVIAR COMENTARIO E LIKE -->

            <form class="formComentario">
                <input type="text" name="comentario" placeholder="comentario" required>
                <button type="submit" onclick="FlexLoader.show()">
                    <i class="fas fa-paper-plane"></i>
                </button>
                <button type="submit" onclick="FlexLoader.show()">
                    <i class="fas fa-heart"></i>
                </button>

            </form>

        </div>

    </div>
</div>

@endsection