<?php

namespace App\Http\Controllers;

use App\Model\Arte;
use App\Model\Comentario;
use App\Model\Usuario;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{


  public function inicio()
  {
    if (@$_REQUEST['busca'] == '') {
      $artes = Arte::mostrarArtes();
    } else {
      $artes = Arte::pesquisar($_REQUEST['busca']);
    }


    return view('index', [
      "artes" => $artes
    ]);
  }


  public function perfil()
  {
    $artes = Arte::buscarArteUsuario(session('usuario')->id);

    return view('perfil', [
      "artes" => $artes
    ]);
  }

  public function editar()
  {
    if (@$_FILES['arquivo']['tmp_name']) {
      $hash =  md5_file($_FILES['arquivo']['tmp_name']);
      move_uploaded_file($_FILES['arquivo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/fotoperfil/$hash.jpg");
      Usuario::editarfoto("/fotoperfil/$hash.jpg", session('usuario')->id);
    }

    Usuario::editar([
      'id' => session('usuario')->id,
      'nome' => $_REQUEST['nome'],
      'bio' => @$_REQUEST['biografia'],
    ]);

    $user = Usuario::buscarPorid(session('usuario')->id);
    session(['usuario' => $user]);

    return redirect('/perfil');
  }

  public function publi()
  {
    Arte::addview($_REQUEST['id']);
    $arte = Arte::buscarid($_REQUEST['id']);
    $user = Usuario::buscarPorid($arte->idUsuario);
    $comentarios = Comentario::buscar($arte->id);

    foreach ($comentarios  as $c) {
      $c->usuario = Usuario::buscarPorid($c->idusuario);
    }

    return view('publi', [
      "arte" => $arte,
      "user" => $user,
      "comentarios" => $comentarios,
    ]);
  }

  public function gostei()
  {
    Arte::addlike($_REQUEST['id']);

    return back();
  }

  public function cad()
  {

    return view('cad');
  }
  public function perfilpubli()
  {
    $artes = Arte::buscarArteUsuario($_REQUEST['id']);
    $user = Usuario::buscarPorid($_REQUEST['id']);

    return view('perfilpubli', [
      "artes" => $artes,
      "user" => $user,
    ]);
  }
}
