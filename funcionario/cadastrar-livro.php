<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Cadastrar Livro - BibliOnline</title>
        <!--importando o FontAwesome-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <!--importando css da página-->
        <link rel="stylesheet" href="/css/form.css">
        <!--importando a fonte Roboto e Comfortaa do Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Cadastrar Livro</h1>
                <form id="form" method="post" action="home.php">
                    <input class="caixa" type="text" name="titulo" placeholder="Título" required autofocus>
                    <input class="caixa" type="text" name="sub" placeholder="Subtítulo (se houver)">
                    <input class="caixa" type="text" name="autor" placeholder="Autor (separe por vírgulas)" required>
                    <input class="caixa" type="text" name="editora" placeholder="Editora" required>
                    <input class="caixa" type="text" name="data-pub" placeholder="Ano de publicação" required>
                    <input class="caixa" type="text" name="isbn" placeholder="ISBN" required>
                    <input class="caixa" type="text" name="tags" placeholder="Tags (separe por vírgulas)" required>
                    <select class="caixa" name="tipo" required>
                        <option value="" disabled selected>Tipo  do livro</option>
                        <option value="didatico">Didático</option>
                        <option value="paradidatico">Paradidático</option>
                        <option value="romance">Romance</option>
                    </select>
                    <input class="caixa" type="text" name="genero" placeholder="Gênero">
                    <div id="caixa-botão">
                        <input id="esquerdo" class="botão" type="button" value="Cancelar" onclick="location.href='home.php'">
                        <input id="direito" class="botão" type="submit" value="Cadastrar">
                    </div>
                    <div style="clear:both"/>
                </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
        <script type="text/javascript" src="/js/verificaTipo.js"></script>
    </body>
</html>