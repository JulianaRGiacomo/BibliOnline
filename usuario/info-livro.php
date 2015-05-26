<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Toda Poesia - Paulo Leminski - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
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
            <form id="form" method="post" action="index.php">
                <input type="text" value="9788539522233" name="isbn" hidden="hidden">
                <div id="caixa-botão">
                    <a id="esquerdo" class="botão neutro cancelar" href="index.php">Cancelar</a>
                    <button id="direito" class="botão positivo reservar" type="submit">Reservar</button>
                </div>
                <div style="clear:both"></div>
            </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="../js/menu.js"></script>
    </body>
</html>