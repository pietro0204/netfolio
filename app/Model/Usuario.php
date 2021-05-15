<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

/*CADASTRO DE E-MAIL DO USUARIO NO BANCO*/

class Usuario
{
    public static function buscarPorEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $params = ['email' => $email];
        $results = DB::select($sql, $params);

        if (count($results) >= 1) {
            return $results[0];
        } else {
            return null;
        }
    }

    public static function buscarPorid($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $params = [$id];
        $results = DB::select($sql, $params);

        if (count($results) >= 1) {
            return $results[0];
        } else {
            return null;
        }
    }

    /* RETORNANDO PARA O BANCO OS DADOS PREENCHIDOS PELO USUARIO*/
    public static function cadastrar($dados)
    {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $params = [
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'senha' => $dados['senha'],
        ];
        DB::insert($sql, $params);
    }

    /* EDITAR OS DADOS(foto de perfil nome bio) PREENCHIDOS PELO USUARIO*/
    public static function editar($dados)
    {
        $sql = "update usuarios set nome = ? , bio = ? where id = ?";
        $params = [$dados['nome'], $dados['bio'],$dados['id']];
        DB::update($sql, $params);
    }
    public static function editarfoto($fotousu,$id)
    {
        $sql = "update usuarios set fotousu = ? where id = ?";
        $params = [$fotousu,$id];
        DB::update($sql, $params);
    }
}
