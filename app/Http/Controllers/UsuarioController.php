<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use \Exception;
use App\Model\Usuario;

class UsuarioController extends BaseController
{
  public function cad()
  {
    return view('cad');
  }
  public function cadastrar()
  {
      $params = $_REQUEST;
      /*PARA VERIFICAR SE AS SENHAS DOS USUARIOS BATEM*/
      if ($params['senha'] !== $params['confirmesenha']) {
      throw new Exception('Senhas não são iguais!');
      }

      /*PARA VERIFICAR SE AS SENHAS TEM 6 CARACTERES*/
      if (strlen($params['senha']) < 6) {
      throw new Exception('A senha deve conter no minimo 6 caracteres!');
      }
    
    
    
      /*VERIFICAR SE O USUARIO JÁ É CADASTRADO*/
      $usuarioMesmoEmail = Usuario::buscarPorEmail($params['email']);
      if ($usuarioMesmoEmail !== null) {
      throw new Exception('E-mail já cadastrado!');
      }

      /*EFETUAR CADASTRO CADASTRADO*/

      Usuario::cadastrar($params);

      echo "CADASTRADO COM SUCESSO!";

      return view('login');
  }
}