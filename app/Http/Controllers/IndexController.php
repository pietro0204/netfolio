<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{


public function inicio()
{
return view ('layouts.insite');
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