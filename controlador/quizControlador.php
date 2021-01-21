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
                //certo
                echo("<script>alert('Correto');</script>");
                /* alert(acertou()); */
                if(!isset($_SESSION["acertos"])){
                    $_SESSION["acertos"] = 1; 
                }else{
                    $_SESSION["acertos"]+=1;
                }
                $dados["quiz"] = sortearPegarQuestao();
                exibir("quiz/formulario", $dados);
            }else{
                //errado
                echo("<script>alert('Errado');</script>");
                /* alert(errou()); */
                if(!isset($_SESSION["erros"])){
                    $_SESSION["erros"] = 1; 
                }else{
                    $_SESSION["erros"]+=1;
                }
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