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
    $sql = "select * from artes where titulo like ? or  descricao like ?;";
    return DB::select($sql, ['%' . $TermoDeBusca . '%', '%' . $TermoDeBusca . '%']);
  }
  /* FUNCAO BUSCAR POR ID*/
  public static function buscarid($id)
  {
   $sql ="select * FROM artes WHERE id=?";
   $params =[$id];
   return @DB::select($sql, $params)[0];
  }
  /* função inserir a arte dos usuarios no banco*/
  public static function inserir($dados)
  {
    $sql ="INSERT INTO ARTES(titulo, descricao, arquivo, idUsuario)  VALUES(?, ?, ?, ?)";
    $params =[@$dados['titulo'], @$dados['descricao'], @$dados['arquivo'], @$dados['idUsuario']];
    DB::insert($sql, $params);
  }
  /* FUNCAO BUSCAR ARTE DO USUARIO */
public static function buscarArteUsuario($iddousuario)
{
  $sql="select * FROM artes WHERE idUsuario=?";
  $params=[$iddousuario];
  return @DB::select($sql, $params);
}
  /* Função editar */
  public static function editar($dados)
  {
    $sql ="update artes set titulo=? , descricao=? where id=?";
    $params =[@$dados['titulo'], @$dados['descricao'], $dados['id']];
    DB::update($sql, $params);
  }
  /* FUNCAO EXCLUIR */
  public static function excluir($id)
  {
    $sql ="delete FROM artes WHERE id=?";
    $params =[$id];
    DB::delete($sql, $params);
  }
}
