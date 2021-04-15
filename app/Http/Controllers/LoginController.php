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

  public function logar()
  {
    $form = $_REQUEST;
    
    /*ENCONTRAR USUARIO*/
    $usuario = Usuario::buscarPorEmail($form['email']);

    /*VERIFICANDO SE E-MAIL ESTÁ CADASTRADO*/
    if (!$usuario) throw new Exception("Usuário não cadastrado!");
    
    /*VERIFICANDO SE SENHA ESTÁ DIFERENTE*/
    if ($usuario->senha != $form['senha']) throw new Exception("Senha incorreta!");
    
    /*SESSAO DE LOGIN, PERMANECER LOGADO*/
    session(['usuario'=> $usuario]);
    return redirect("/");
  }
}
