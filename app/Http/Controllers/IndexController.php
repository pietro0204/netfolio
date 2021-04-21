<?php

namespace App\Http\Controllers;

use App\Model\Arte;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{


public function inicio()
{
 $artes = Arte::mostrarArtes();
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