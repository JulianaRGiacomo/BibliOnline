<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Busca - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/busca.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Resultados da busca por "J."</h1>
                <div id="filtros">
                    <form action="busca.php" method="get">
                        <label><span class="filtro"><input type="checkbox" value="todos-livros" id="todos-livros" oninput=""> Livros:</span> </label>
                        <label><input type="checkbox" value="titulo" id="titulo"> Título</label>
                        <label><input type="checkbox" value="autor" id="autor"> Autor</label>
                        <label><span class="filtro"><input type="checkbox" value="todos-status" id="todos-status" oninput=""> Status:</span> </label>
                        <label><input type="checkbox" value="disponível" id="disponível"> Disponível</label>
                        <label><input type="checkbox" value="reservado" id="reservado"> Reservado</label>
                        <label><input type="checkbox" value="locado" id="locado"> Locado</label>
                    </form>
                </div>
                <table>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Status</th>
                            <th>Reservar</th>
                        </tr>
                        <tr>
                            <td>Harry Potter e A Pedra Filosofal</td>
                            <td>J. K. Rowling</td>
                            <td>Locado</td>
                            <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar" disabled>Reservar</button></td>
                        </tr>
                        <tr>
                            <td>Java - Como programar</td>
                            <td>Paul J. Deitel, Dr Harvey M. Deitel</td>
                            <td>Disponível</td>
                            <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                        </tr>
                        <tr>
                            <td>Contos Inacabados</td>
                            <td>J. R. R. Tolkien</td>
                            <td>Disponível</td>
                            <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                        </tr>
                </table>
                <div id="caixa-botão">
                    <a class="botão neutro voltar" href="index.php">Voltar</a>
                </div>
                <div style="clear:both"></div>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="../js/menu.js"></script>
    </body>
</html>