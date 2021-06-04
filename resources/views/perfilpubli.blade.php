@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/perfil.css">


<!--  CONTEUDO DO CORPO !-->

<div class="conteudo">

    <!-- LINHA DO PERFIL MENU DE EDIÇAO FOTO E BIOGRAFIA -->
    <div class="linha">
        <div class="perfil">



            <img src="{{ $user->fotousu }}" alt=""><!-- IMAGEM DO PERFIL-->



            <span>
                <h1>{{ $user->nome }}</h1>
                <h2>{{ $user->bio }}</h2>
            </span>

        </div>
    </div>
    <!-- PORTFOLIO -->
    <h1>Meu Portifolio</h1>

    <!-- LINHA DE TODO CONTEUDO -->

    <div class="linha">

        <!-- CAIXAS DAS ARTES -->

        <?php foreach ($artes as $a) { ?>

            <div class="boxart">


                <a href="/publi?id=<?php echo $a->id ?>" onclick="FlexLoader.show()"><img src="<?php echo ($a->arquivo); ?>" alt=""></a>

                <div class="linha">
                    <span class="datahora"><?php echo $a->datahora;  ?></span>

                </div>

            </div>

        <?php } ?>

    </div>


</div>


@endsection