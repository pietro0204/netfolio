<?php

namespace App\Http\Controllers;

use App\Model\Arte;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{


public function inicio()
{
  if(@$_REQUEST['busca'] == ''){
    $artes = Arte::mostrarArtes();
  } else{
    $artes = Arte::pesquisar($_REQUEST['busca']);
  }


return view ('index',[
  "artes" => $artes
]);

}


  public function perfil()
  {

    return view('perfil');
  }

  public function publi()
  {

    return view('publi');
  }

  public function cad()
  {

    return view('cad');
  }
}