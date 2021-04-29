@extends('layouts.insite')

@section('conteudo')

<link rel="stylesheet" href="/css/index.css">

<!--  CONTEUDO DO CORPO !-->

<div class="conteudo">


    <h1>Destaques</h1> <!-- TITULO 1 LINHA -->


    <!-- CARTOES DAS ARTES -->
    <div class="linha">

        <?php foreach ($artes as $A) { ?>

            <div class="boxpubli">
                <!-- CAIXA DOS Cartão de Publicação -->

                <a href="/publi" onclick="FlexLoader.show()"><img src="<?php echo ($A->arquivo); ?>" alt=""></a>

                <div class="linha">
                    <i class="fas fa-eye"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                </div>
            </div>
        <?php } ?>

    </div>

</div>

<div class="conteudo">

    <h1>Novidades</h1> <!-- TITULO 2 LINHA -->


    <!-- CARTOES -->
    <div class="linha">

        <?php foreach ($artes as $A) { ?>

            <div class="boxpubli">

                <a href="/publi" onclick="FlexLoader.show()"><img src="<?php echo ($A->arquivo); ?>" alt=""></a>

                <div class="linha">
                    <i class="fas fa-eye"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                </div>
            </div>
        <?php } ?>

    </div>

</div>



@endsection