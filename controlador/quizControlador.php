<?php

require_once "modelo/quizModelo.php";

/** anon */
function sortear($id) {
    $dados["quiz"] = sortearPegarQuestao($id);
    exibir("quiz/formulario", $dados);
}

/** anon */
function adicionar() {
    if (ehPost()) {
        $quiz = $_POST["quiz"];
        dd($quiz);
        alert(adicionarQuiz($quest, $r1, $r2, $r3, $r4, $rcerta));
        //redirecionar("quiz/sortear");
    } else {
        exibir("quiz/erro");
    }
}