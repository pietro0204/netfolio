<?php

namespace App\Http\Controllers;

use App\Model\Arte;
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
    $arte = Arte::buscarid($_REQUEST['id']);
    $user = Usuario::buscarPorid($arte->idUsuario);

    return view('publi', [
      "arte" => $arte,
      "user" => $user
    ]);
  }

  public function cad()
  {

    return view('cad');
  }
}
