<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Toda Poesia - Paulo Leminski - BibliOnline</title>
        <!--importando o FontAwesome-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <!--importando css da página-->
        <link rel="stylesheet" href="/css/table.css">
        <link rel="stylesheet" href="/css/form.css">
        <!--importando a fonte Roboto e Comfortaa do Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
            <h1>Informações do Livro</h1>
            <table class="livro">
                <tr>
                    <th>Título</th>
                    <td>Toda Poesia</td>
                </tr>
                <tr>
                    <th>Autor</th>
                    <td>Paulo Leminski</td>
                </tr>
                <tr>
                    <th>Editora</th>
                    <td>Schwarcz S. A.</td>
                </tr>
                <tr>
                    <th>Ano de Publicação</th>
                    <td>2013</td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td>9788539522233</td>
                </tr>
                <tr>
                    <th>Tipo</th>
                    <td>Romance</td>
                </tr>
                <tr>
                    <th>Genêro</th>
                    <td>Poesia</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>Disponível</td>
                </tr>
            </table>
            <form id="form" method="post" action="home.php">
                <div id="caixa-botão">
                        <input id="esquerdo" class="botão" type="button" value="Cancelar" onclick="home.php">
                        <input id="direito" class="botão" type="submit" value="Reservar">
                </div>
                <div style="clear:both"/>
            </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
    </body>
</html>