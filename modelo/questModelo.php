<?php

function pegarTodasQuestoes() {
    $cnx = conn();
    $sql = "SELECT * FROM quest";
    $resultado = $cnx->query($sql);
    $quest = array();
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$quest[] = $col;
	}
    return $quest;
}

function pegarQuestaoPorId($id) {
    $cnx = conn();
    $sql = "SELECT * FROM quest WHERE id = '$id'";
    $resultado = $cnx->query($sql);
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$quest = $col;
	}
    return $quest;
}

function adicionarQuestao($quest, $r1, $r2, $r3, $r4, $rcerta) {
    $cnx = conn();
    $sql = "INSERT INTO quest(quest, r1, r2, r3, r4, rcerta) 
            VALUES ('$quest', '$r1', '$r2', '$r3', '$r4', '$rcerta')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'questao cadastrado com sucesso!';
}

function editarQuestao($id, $quest, $r1, $r2, $r3, $r4, $rcerta) {
    $cnx = conn();
    $sql = "UPDATE quest SET quest = '$quest', r1 = '$r1', r2 = '$r2', r3 = '$r3', r4 = '$r4', rcerta = '$rcerta' WHERE id = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao alterar usuário'); }
    return 'Usuário alterado com sucesso!';
}

function deletarQuestao($id) {
    $cnx = conn();
    $sql = "DELETE FROM quest WHERE id = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar questao'); }
    return 'Questão deletada com sucesso!';
            
}