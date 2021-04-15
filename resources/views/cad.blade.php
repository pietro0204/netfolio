@extends('layouts.outsite')
<!-- FORMULARIO DO CADASTRO!-->
@section('conteudo')
<form action="/cadastrar" method="post">
    <h3>CADASTRO</h3>
    @csrf
    <input type="text" name="nome" placeholder="@Nome de Usuario" required>
    <input type="text" name="email" placeholder="E-mail" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <input type="password" name="confirmesenha" placeholder="Confirmar Senha" required>
    <button type="submit">CADASTRAR</button>
    <a href="/login">Já sou cadastrado!</a>

</form>
@endsection