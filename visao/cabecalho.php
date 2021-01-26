<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<nav>
  <ul class="nav navbar-expand-lg justify-content-center bg-warning">
  <li class="nav-item">
    <a class="nav-link text-dark font-weight-bold" href="./">Jogar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark font-weight-bold" href="./">|</a>
  </li>
  <li class="nav-item">
  <a class="nav-link text-dark font-weight-bold" href="paginas/sobre">Sobre</a></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark font-weight-bold" href="./">|</a>
  </li>
  <?php if (!isset($_SESSION["acesso"])) :?>
    <li class="nav-item">
      <a class="nav-link text-dark font-weight-bold" href="login/">Entrar</a>
    </li>
	<?php else:?>
  <li class="nav-item">
    <a class="nav-link text-dark font-weight-bold" href="quest/">Questões</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark font-weight-bold" href="./">|</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark font-weight-bold" href="login/logout">Desconectar</a>
  </li>
  <?php endif;?>
</ul> 
</nav>