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
    <h1>Quiz</h1>
        <?php
            if(isset($_SESSION["acertos"])){
                echo "Acertos:". $_SESSION["acertos"]."<br>";
            }

            if(isset($_SESSION["erros"])){
                echo "Erros:". $_SESSION["erros"];
            }      
        ?>

    <form action="" method="POST">
        <h2>Questão: <?=$quiz["quest"]?></h2>
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

        <button type="submit">Enviar</button>
    </form>

    <a href="./paginas/">Reiniciar</a>

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

    