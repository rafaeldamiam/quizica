<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<nav>
  <ul>
    <li><a href="./">Jogar</a></li>
    <li><a href="paginas/sobre">Sobre</a></li>
    <?php if (!isset($_SESSION["acesso"])) :?>
			<li><a href="login/">Entrar</a></li>
		<?php else:?>
      <li><a href="quest/">Questões</a></li>
      <li><a href="login/logout">Desconectar</a></li>
    <?php endif;?>
  </ul>
</nav>