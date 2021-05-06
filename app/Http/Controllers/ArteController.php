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

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "\artes\\$hash.jpg");
    Arte::inserir([
      "titulo" => $_REQUEST['titulo'],
      "descricao" => $_REQUEST['descricao'],
      "arquivo" => "\artes\\$hash.jpg"
    ]);
  }
}
