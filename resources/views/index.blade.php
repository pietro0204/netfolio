@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/index.css">

<!--  CONTEUDO DO CORPO !-->

<div id="conteudo">

    <div class="titulo">
        <h1>Destaques</h1> <!-- TITULO 1 LINHA -->
    </div>

    <!-- CARTOES DAS ARTES -->
    <?php for ($i = 1; $i <= 4; $i++) { ?>

        <div class="boxpubli">
            <a href="/publi"><img src="/img/3.jpg" alt=""></a>

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



@endsection