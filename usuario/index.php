<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/home.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <a href="livros-locados.php">
                <div id="aviso">
                    <i class="fa fa-exclamation-triangle"></i> Você possui livro(s) locado(s) com prazo de devolução esgotado!
                </div>
            </a>
            <nav>
                <ul id="açoes">
                    <li class="item"><a href="acervo.php"><i class="fa fa-university"></i><br>Consultar Acervo</a></li>
                    <li class="item"><a href="historico.php"><i class="fa fa-history"></i><br>Histórico</a></li>
                    <li class="item"><a href="reservas.php"><i class="fa fa-lock"></i><br>Reservas</a></li>
                    <li class="item"><a href="livros-locados.php"><i class="fa fa-exchange"></i><br>Locados</a></li>
                </ul>
            </nav>
        </div>
        <?php include("../footer.html"); ?>
    </body>
</html>