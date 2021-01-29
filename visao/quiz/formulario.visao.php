<?php
if(isset($_SESSION["acertos"]) || isset($_SESSION["erros"])){
    if(empty($_SESSION["acertos"])){
        $_SESSION["acertos"] = 0;
    }

    if(empty($_SESSION["erros"])){
        $_SESSION["erros"] = 0;
    }
        $v = $_SESSION["acertos"] + $_SESSION["erros"];
}else{
    $v = 0;
}

//numero de questões
$n = 5;

?>
<?php if ($v < $n) :?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 mt-4 mb-4 rounded bg-dark"></div>
            <div class="text-center col-4">
                <h1 class="fonte-quiz3">< QUIZICA ></h1>
            </div>
        <div class="col-4 mt-4 mb-4 rounded bg-dark"></div>
    </div>
            <?php
                if(isset($_SESSION["acertos"])){
                    echo "Acertos:". $_SESSION["acertos"]."<br>";
                }

                if(isset($_SESSION["erros"])){
                    echo "Erros:". $_SESSION["erros"];
                }      
            ?>
    <div class="row p-2 mt-2 mb-2 justify-content-center border rounded border-warning">
        <h2><?=$quiz["quest"]?></h2>
    </div>
    <div class="row p-2 mt-4 mb-2 ">
        <form action="" method="POST">
            <input type="radio" id="r1" name="r" value="<?=@$quiz['r1']?>">
            <label for="r1"><?=$quiz['r1']?></label><br>
            <input type="radio" id="r2" name="r" value="<?=@$quiz['r2']?>">
            <label for="r2"><?=$quiz['r2']?></label><br>
            <input type="radio" id="r3" name="r" value="<?=@$quiz['r3']?>">
            <label for="r3"><?=$quiz['r3']?></label><br>
            <input type="radio" id="r4" name="r" value="<?=@$quiz['r4']?>">
            <label for="r4"><?=$quiz['r4']?></label><br>

            <input type="hidden" name="quest" id="quest" value="<?=@$quiz['quest']?>">
            <input type="hidden" name="rcerta" id="rcerta" value="<?=@$quiz['rcerta']?>">
            <input type="hidden" name="id" id="id" value="<?=@$quiz['id']?>">
        </div>
        <div class="row justify-content-center">
            <div class="col-4 mt-4 mb-4 rounded bg-dark"></div>
                <div class="text-center col-4">
                    <button class=" btn-warning2 rounded border text-center border-dark fonte-quiz2 p-2 m-2" type="submit">Enviar</button>
                    <a href="./paginas/" class="fonte-quiz2"><button type="button" class="btn-warning-red rounded border border-dark p-2 m-2">Reiniciar</button></a>
                </div>
            <div class="col-4 mt-4 mb-4 rounded bg-dark"></div>
        </div>
    </form>
    
    

            
</div>
<?php else:?>
    <h1>Resultados</h1>
        <?php
            if($_SESSION["acertos"] == $n){
                echo "<h3>Você acertou todas, parabens!</h3><br>";
                echo "<h3>(>‿◠)✌</h3>";
            }

            if($_SESSION["erros"] == $n){
                echo "<h3>Parabéns!!! Você errou todas, falhou com sucesso!</h3>";
                echo "<h3>(´･_･`)</h3>";
            }
            echo "Acertos: ". $_SESSION["acertos"]."<br>";
            echo "Erros: ". $_SESSION["erros"];     
        ?>
        <a href="./paginas/">Jogar Novamente</a>
<?php endif;?>

    