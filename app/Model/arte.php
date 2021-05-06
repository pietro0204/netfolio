<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class Arte
{
  public static function mostrarArtes()
  {
    $sql = "SELECT * FROM artes";
    $results = DB::select($sql);

    return $results;
  }
  /* Função de pesquisar */
  public static function pesquisar($TermoDeBusca)
  {
    $sql = "select * from artes where titulo like ? or  des like ?;";
    return DB::select($sql, ['%' . $TermoDeBusca . '%', '%' . $TermoDeBusca . '%']);
  }
  /* função inserir a arte dos usuarios no banco*/
  public static function inserir($dados)
  {
    $sql ="INSERT INTO ARTES(titulo, descricao, arquivo)  VALUES(?, ?, ?)";
    $params =[$dados['titulo'], $dados['descricao'], $dados['arquivo']];
    DB::insert($sql, $params);
  }
}
