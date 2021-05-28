<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class Comentario
{
    public static function inserir($dados)
    {

        $sql = "INSERT INTO comentarios(idusuario, idarte, comentario)  VALUES(?, ?, ?)";
        $params = [@$dados['idusuario'], @$dados['idarte'], @$dados['comentario']];
        DB::insert($sql, $params);
    }
    public static function buscar($idarte)
    {
        $sql = "select * FROM comentarios WHERE idarte=?";
        $params = [$idarte];
        return @DB::select($sql, $params);
    }
}
