<?php

require_once "modelo/quizModelo.php";

/** anon */
function adicionar() {
    if (ehPost()) {
        if(!empty($_POST["r"])){
            $quiz["quest"] = $_POST["quest"];
            $quiz["r"] = $_POST["r"];
            $quiz["rcerta"] = $_POST["rcerta"];
            $quiz["id"] = $_POST["id"];
            /* dd($quiz); */
            if($quiz["r"] == $quiz["rcerta"]){
                echo("<script>alert('Correto');</script>");
                /* alert(acertou()); */
                $dados["quiz"] = sortearPegarQuestao();
                exibir("quiz/formulario", $dados);
            }else{
                echo("<script>alert('Errado');</script>");
                /* alert(errou()); */
                $dados["quiz"] = sortearPegarQuestao();
                exibir("quiz/formulario", $dados);
            }
        }else{
            echo("<script>alert('Escolha alguma alternativa');</script>");
            $dados["quiz"] = sortearPegarQuestao();
            exibir("quiz/formulario", $dados);
        }
        
    } else {
        $dados["quiz"] = sortearPegarQuestao();
        exibir("quiz/formulario", $dados);
    }
}