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
$n = 6;

?>
<?php if ($v < $n) :?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 mt-4 mb-4 rounded bg-dark"></div>
            <div class="text-center col-4">
                <h2 class="fonte-quiz3">< SURPRESA ></h2>
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
        echo("<script>alert('Clique em Ok, veja o resultado e aguarde seu presente!');</script>");
        //echo $_SESSION["acertos"]. "<br>" . $_SESSION["erros"];
        function red($url){
            header("refresh: 5; url=$url");
        }
            // acertou a maioria
            if(($_SESSION["acertos"] > ($n/2)) && ($_SESSION["acertos"] < $n)){
                echo "<h3>Você não acertou todas, mas mandou bem!</h3>";
                echo "<h3>Seu presente será...</h3>";
                red("https://drive.google.com/drive/folders/1WVnDb-I8vi0uVtRKIlLiRwiqSv2BE74E?usp=sharing");
            //    ACERTOU TODAS
            }elseif($_SESSION["acertos"] >= $n){
                echo "<h3>Você acertou todas, parabens!</h3>";
                echo "<h3>(>‿◠)✌</h3>";
                echo "<h3>Seu presente será...</h3>";
                red("https://drive.google.com/drive/folders/1WVnDb-I8vi0uVtRKIlLiRwiqSv2BE74E?usp=sharing");
            }

            //  errou a maioria
            if(($_SESSION["erros"] >= ($n/2)) && ($_SESSION["erros"] < $n)){
                echo "<h3>Você não errou todas, mas mandou mal ein!</h3>";
                echo "<h3>Seu presente será...</h3>";
                red("https://drive.google.com/drive/folders/15ikrCs7CC_CYYuGJZ8ZPKC_CtRzE1Jur?usp=sharing");
            // ERROU TODAS    
            }elseif($_SESSION["erros"] == $n){
                echo "<h3>Parabéns!!! Você errou todas, falhou com sucesso!</h3>";
                echo "<h3>(´･_･`)</h3>";
                echo "<h3>Seu presente será...</h3>";
                red("https://drive.google.com/drive/folders/15ikrCs7CC_CYYuGJZ8ZPKC_CtRzE1Jur?usp=sharing");
            }
            echo "<br>Acertos: ". $_SESSION["acertos"]."<br>";
            echo "Erros: ". $_SESSION["erros"];     
        ?>
        <a href="./paginas/">Jogar Novamente</a>
<?php endif;?>

    