<h1>Quiz</h1>
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
        <button type="submit">Enviar</button>
    </form>