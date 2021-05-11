<?php

namespace App\Http\Controllers;

use App\Model\Arte;
use Illuminate\Routing\Controller as BaseController;


class ArteController extends BaseController
{

  public function listagem()
  {
    $artes = Arte::mostrarArtes();
    return view('livros.listagem', $artes);
  }
  public function cadastrar()
  {
    $hash =  md5_file($_FILES['arquivo']['tmp_name']);

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/artes/$hash.jpg");
    Arte::inserir([
      "titulo" => $_REQUEST['titulo'],
      "descricao" => $_REQUEST['descricao'],
      "arquivo" => "/artes/$hash.jpg",
      "idUsuario" => session('usuario')->id,
    ]);
    return redirect("/perfil");
  }
  public function editar()
  {
    
    Arte::editar([
      "titulo" => $_REQUEST['titulo'],
      "descricao" => $_REQUEST['descricao'],
    ]);
    return redirect("/perfil");
  }
  public function excluir()
  {
    $arte = Arte::buscarid($_REQUEST['id']);
    unlink($_SERVER['DOCUMENT_ROOT'] . $arte->arquivo);
    Arte::excluir($_REQUEST['id']);
    return redirect("/perfil");
  }
}
