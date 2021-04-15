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
}
