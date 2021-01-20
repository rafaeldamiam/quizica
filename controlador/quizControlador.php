<?php

require_once "modelo/quizModelo.php";

/** anon */
function adicionar() {
    if (ehPost()) {
        $quiz["quest"] = $_POST["quest"];
        $quiz["r"] = $_POST["r"];
        $quiz["rcerta"] = $_POST["rcerta"];
        $quiz["id"] = $_POST["id"];
        /* dd($quiz); */
        if($quiz["r"] == $quiz["rcerta"]){
            echo("acertou");
            /* alert(acertou()); */
            $dados["quiz"] = sortearPegarQuestao();
            exibir("quiz/formulario", $dados);
        }else{
            echo("errou");
            /* alert(errou()); */
            $dados["quiz"] = sortearPegarQuestao();
            exibir("quiz/formulario", $dados);
        }
        
    } else {
        $dados["quiz"] = sortearPegarQuestao();
        exibir("quiz/formulario", $dados);
    }
}