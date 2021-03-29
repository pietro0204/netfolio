<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
  public function login()
  {
    return view('login');
  }

  public function inicio()
  {

    return view('index');
  }

  public function perfil()
  {

    return view('acc');
  }

  public function cad()
  {

    return view('cad');
  }
}
