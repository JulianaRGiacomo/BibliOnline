<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>BibliOnline</title>
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="/css/home.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <nav>
                <ul id="açoes">
                    <li class="item"><a href="cadastrar-livro.php" tabindex="1"><i class="fa fa-book"></i><br>Cadastrar Livro</a></li>
                    <li class="item"><a href="cadastrar-usuario.php" tabindex="2"><i class="fa fa-user-plus"></i><br>Cadastrar Usuário</a></li>
                    <li class="item"><a href="registrar-locacao.php" tabindex="3"><i class="fa fa-exchange"></i><br>Registrar Locação</a></li>
                    <li class="item"><a href="registrar-devolucao.php" tabindex="4"><i class="fa fa-check-square-o"></i><br>Registrar Devolução</a></li>
                    <li class="item"><a href="listar-reservas.php" tabindex="5"><i class="fa fa-lock"></i><br>Reservas</a></li>
                    <li class="item"><a href="listar-devolucoes.php" tabindex="6"><i class="fa fa-archive"></i><br>Devoluções</a></li>
                    <li class="item"><a href="listar-locacoes.php" tabindex="7"><i class="fa fa-history"></i><br>Locações</a></li>
                    <li class="item"><a href="listar-prazos-expirados.php" tabindex="8"><i class="fa fa-bomb"></i><br>Prazos Expirados</a></li>
                </ul>
            </nav>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
    </body>
</html>