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
}