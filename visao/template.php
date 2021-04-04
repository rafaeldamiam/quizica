<html>
    <head>
        <link rel="icon" href= "./publico/imgs/logo_quizica.png" type="image/x-icon">
        <title>SURPRESA!!!</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
        <link href="./publico/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./publico/css/bootnavbar.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href= "img/logo_svsa-w.png" type="image/x-icon">
        <script type="text/javascript" src="./publico/js/jquery.min.js"></script>
        <script src="./publico/js/bootnavbar.js"></script>
        <script type="text/javascript" src="./publico/js/bootstrap.min.js"></script>
        <script src="https://github.com/makeusabrew/bootbox/releases/download/v4.4.0/bootbox.min.js"></script>
    </head>
    <body class="container bg-pagina">
    <section class="nav">
        <div class="container">
            <?php include 'cabecalho.php';?>
        </div>
    </section>
    <section class="content">
        <main class="container p-5">
            <?php require $viewFilePath; ?>
        </main>
    </section>    
    <section class="footer container">
        <div class="container p-2">
            <?php include 'rodape.php';?>
        </div>
    </section>
    </body>
</html>
