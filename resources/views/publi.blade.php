@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/publi.css">

<!-- CONTEUDO DO CORPO -->


<div class="conteudo">

    <!-- LINHA DO AUTOR DA ARTE -->

    <div class="linha boxautor">
        <!-- IMAGEM DO PERFIL-->
        <a href="/perfilpubli?id={{ $user->id }}"><img src="{{ $user->fotousu }}" alt=""></a>


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
                    <span>{{ $arte->visualizacoes }}</span>
                </div>

                <div>
                    <i class="fas fa-heart"></i>
                    <span>{{ $arte->gostei }}</span>
                </div>
                <div>
                    <i class="fas fa-comment"></i>
                    <span>{{ count($comentarios) }}</span>
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

                    <?php foreach ($comentarios as $c) { ?>

                        <div class="boxComent">
                            <!-- CAIXA DE COMENTAIRO -->

                            <div class="linha boxautor comentario">
                                <!-- LINHA AUTOR DO COMENTARIO -->
                                <a href="/perfilpubli?id={{ $c->usuario->id }}"><img src="{{ $c->usuario->fotousu }}" alt=""></a>
                                <span>

                                    <h1>{{ $c->usuario->nome }}</h1>
                                    <h2>em {{ $c->datahora }}</h2>

                                </span>

                            </div>
                            <div class="texto">
                                {{ $c->comentario }}
                            </div>
                            <hr>
                        </div>

                    <?php } ?>

                </div>
            </div>

            <!-- LINHA DO FORMULARIO PARA ENVIAR COMENTARIO E LIKE -->
            @if(session('usuario'))
            <form class="formComentario" action="/publi/comentar" method="POST">
                @csrf
                <input type="text" name="comentario" placeholder="comentario" maxlength="400" required>
                <input type="hidden" name="idarte" value="{{ $arte->id }}">
                <button type="submit" name="enviarComentario" onclick="FlexLoader.show()">
                    <i class="fas fa-paper-plane"></i>
                </button>

                <input type="hidden" name="id" value="{{ $arte->id }}">
            </form>
            <form class="formGostei" action="/publi/gostei" method="POST">
                @csrf
                <button type="submit" name="gostei" onclick="FlexLoader.show()">
                    <i class="fas fa-heart"></i>
                </button>
                <input type="hidden" name="id" value="{{ $arte->id }}">
            </form>
            @endif
        </div>

    </div>
</div>

@endsection