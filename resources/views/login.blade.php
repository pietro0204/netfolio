@extends('layouts.outsite')
<!-- FORMULARIO DO LOGIN !-->
@section('conteudo')

  <form action="/logar" method="post">
    <h3>LOGIN</h3>
    @csrf

    <input type="text" name="email" placeholder="E-mail" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit" onclick="FlexLoader.show()">LOGIN</button>
    <a href="/cad" onclick="FlexLoader.show()">Cadastre-se aqui!</a>


  </form>
  @endsection