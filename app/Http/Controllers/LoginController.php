<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use \Exception;
use App\Model\Usuario;

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

    return view('perfil');
  }

  public function cad()
  {

    return view('cad');
  }
  /*PARA VERIFICAR SE AS SENHAS DOS USUARIOS BATEM*/
  public function cadusuario()
  {
    $params = $_REQUEST;

    if ($params['senha'] !== $params['confirmesenha']) {
      throw new Exception('Senhas não digitadas corretamente!');
    }
    if (strlen($params['senha']) < 6) {
      throw new Exception('A senha deve conter no minimo 6 caracteres!');
    }
    /*VERIFICAR SE O USUARIO JÁ É CADASTRADO*/
    $usuarioMesmoEmail = Usuario::buscarPorEmail($params['email']);
    if ($usuarioMesmoEmail !== null) {
      throw new Exception('E-mail já cadastrado!');
    }
    Usuario::cadastrar($params);
    return redirect("/login");
  }
}
