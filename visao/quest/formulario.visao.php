<form action="" method="POST">
    Questão: <input type="text" name="quest" value="<?=@$quest['quest']?>">
    Resposta 1: <input type="text" name="r1" value="<?=@$quest['r1']?>">
    Resposta 2: <input type="text" name="r2" value="<?=@$quest['r2']?>">
    Resposta 3: <input type="text" name="r3" value="<?=@$quest['r3']?>">
    Resposta 4: <input type="text" name="r4" value="<?=@$quest['r4']?>">
    Resposta Correta: <input type="text" name="rcerta" value="<?=@$quest['rcerta']?>">
    <button type="submit">Enviar</button>
</form>