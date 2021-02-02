<?php

require_once "modelo/questModelo.php";

/** user, admin */
function index() {
    $dados["quest"] = pegarTodasQuestoes();
    exibir("quest/listar", $dados);
}

/** admin */
function adicionar() {
    if (ehPost()) {
        $quest = $_POST["quest"];
        $r1 = $_POST["r1"];
        $r2 = $_POST["r2"];
        $r3 = $_POST["r3"];
        $r4 = $_POST["r4"];
        $rcerta = $_POST["rcerta"];
        alert(adicionarQuestao($quest, $r1, $r2, $r3, $r4, $rcerta));
        redirecionar("quest/");
    } else {
        exibir("quest/formulario");
    }
}

/** admin */
function deletar($id) {
    alert(deletarQuestao($id));
    redirecionar("quest/index");
}

/** admin */
function editar($id) {
    if (ehPost()) {
        $quest = $_POST["quest"];
        $r1 = $_POST["r1"];
        $r2 = $_POST["r2"];
        $r3 = $_POST["r3"];
        $r4 = $_POST["r4"];
        $rcerta = $_POST["rcerta"];
        alert(editarQuestao($id, $quest, $r1, $r2, $r3, $r4, $rcerta));
        redirecionar("quest/index");
    } else {
        $dados["quest"] = pegarQuestaoPorId($id);
        exibir("quest/formulario", $dados);
    }
}

/** user, admin */
function visualizar($id) {
    $dados["quest"] = pegarQuestaoPorId($id);
    exibir("quest/visualizar", $dados);
}


