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

                <a href="/publi?id={{ $A->id }}" onclick="FlexLoader.show()"><img src="<?php echo ($A->arquivo); ?>" alt=""></a>

              
            </div>
        <?php } ?>

    </div>

</div>

<div class="conteudo">

    <h1>Novidades</h1> <!-- TITULO 2 LINHA -->


    <!-- CARTOES NOVIDADES-->
    <div class="linha">

        <?php foreach ($artes as $N) { ?>

            <div class="boxpubli">

                <a href="/publi?id={{ $N->id }}" onclick="FlexLoader.show()"><img src="<?php echo ($N->arquivo); ?>" alt=""></a>

                
            </div>
        <?php } ?>

    </div>

</div>



@endsection