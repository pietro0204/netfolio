@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/index.css">

<!--  CONTEUDO DO CORPO !-->

<div id="conteudo">

    <div class="titulo">
        <h1>Destaques</h1> <!-- TITULO 1 LINHA -->
    </div>

    <!-- CARTOES DAS ARTES -->
    <div class="linha">

        <?php foreach ($artes as $A) { ?>

            <div class="boxpubli">

                <a href="/publi"><img src="<?php echo ($A->arquivo); ?>" alt=""></a>

                <div class="linha">
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                </div>
            </div>
        <?php } ?>

    </div>

</div>

<div id="conteudo">
    <div class="titulo">
        <h1>Novidades</h1> <!-- TITULO 2 LINHA -->
    </div>

    <!-- CARTOES -->
    <div class="linha">

        <?php foreach ($artes as $A) { ?>

            <div class="boxpubli">

                <a href="/publi"><img src="<?php echo ($A->arquivo); ?>" alt=""></a>

                <div class="linha">
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-comment"></i>
                </div>
            </div>
        <?php } ?>

    </div>

</div>



@endsection