<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<div class="container">
  <div class="row justify-content-center">
    <nav class="navbar navbar-expand-lg bg-warning justify-content-center col-12 rounded" id="navbar">
      <div class="collapse navbar-collapse justify-content-center ">
      <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold" href="./">Jogar</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold" href="./">|</a>
      </li> -->
      <!-- <li class="nav-item">
      <a class="nav-link text-dark font-weight-bold" href="paginas/sobre">Sobre</a></a>
      </li> -->
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
      </div> 
    </nav>
  </div>  
</div>