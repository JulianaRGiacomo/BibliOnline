<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Busca | BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/busca.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto:300|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Resultados da busca por "a"</h1>
                <div id="filtros">
                    <form action="busca.php" method="get">
                        <input type="checkbox" value="tudo"> Tudo
                        <label><span class="filtro"><input type="checkbox" value="todos-livros" id="todos-livros" oninput=""> Livros:</span> </label>
                        <label><input type="checkbox" value="titulo" id="titulo"> Título</label>
                        <label><input type="checkbox" value="autor" id="autor"> Autor</label>
                        <label><span class="filtro"><input type="checkbox" value="todos-status" id="todos-status" oninput=""> Status:</span> </label>
                        <label><input type="checkbox" value="disponível" id="disponível"> Disponível</label>
                        <label><input type="checkbox" value="reservado" id="reservado"> Reservado</label>
                        <label><input type="checkbox" value="locado" id="locado"> Locado</label>
                        <label><span class="filtro"><input type="checkbox" value="todos-usuarios" id="todos-usuarios" oninput="">  Usuários:</span>
                        </label>
                        <label><input type="checkbox" value="nome" id="nome"> Nome</label>
                        <label><input type="checkbox" value="cpf" > CPF</label>
                    </form>
                </div>
                <div id="livros">
                    <table>
                        <caption>Livros</caption>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Status</th>
                            <th>Locar</th>
                        </tr>
                        <tr>
                            <td>Harry Potter e A Pedra Filosofal</td>
                            <td>J. K. Rowling</td>
                            <td>Locado</td>
                            <td><button type="button" class="botão positivo" name="livro" title="Locar" disabled>Locar</button></td>
                        </tr>
                        <tr>
                            <td>Java - Como programar</td>
                            <td>Paul J. Deitel, Dr Harvey M. Deitel</td>
                            <td>Disponível</td>
                            <td><button type="button" class="botão positivo" name="livro" title="Locar">Locar</button></td>
                        </tr>
                        <tr>
                            <td>Contos Inacabados</td>
                            <td>J. R. R. Tolkien</td>
                            <td>Disponível</td>
                            <td><button type="button" class="botão positivo" name="livro" title="Locar">Locar</button></td>
                        </tr>
                    </table>
                </div>
                <div id="usuarios">
                    <table>
                        <caption>Usuários</caption>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Situação</th>
                        </tr>
                        <tr>
                            <td>Alysson Lopes</td>
                            <td>123.456.789.01</td>
                            <td>Regular</td>
                        </tr>
                        <tr>
                            <td>Juliana Giacomo</td>
                            <td>987.654.321-09</td>
                            <td>Regular</td>
                        </tr>
                        <tr>
                            <td>Maria dos Santos</td>
                            <td>926.592.752-09</td>
                            <td>Irregular</td>
                        </tr>
                    </table>
                </div>
                <div id="caixa-botão">
                    <a class="botão neutro voltar" href="index.php">Voltar</a>
                </div>
                <div style="clear:both"></div>
            </section>
        </div>
        <?php include("../footer.html"); ?>
    </body>
</html>