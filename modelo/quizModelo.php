<?php

require_once "modelo/questModelo.php";

function sortearPegarQuestao(){
    $cnx = conn();
    $sql = "SELECT COUNT(id) FROM quest";
    $resultado = $cnx->query($sql);
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		  $quest = $col;
    }
    $id = rand(1, $quest["COUNT(id)"]);
    $quest = pegarQuestaoPorId($id);
    return $quest;
}

function sortearPegarQuestaoId($id){
  $cnx = conn();
  $sql = "SELECT COUNT(id) FROM quest";
  $resultado = $cnx->query($sql);
  while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
    $quest = $col;
  }
  $id_sort = rand(1, $quest["COUNT(id)"]);
  $quest = pegarQuestaoPorIdSor($id, $id_sort);
  return $quest;
}
