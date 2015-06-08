<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Prazos Expirados | BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto:300|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main" style="width:100%;">
                <h1>Prazos de Devolução Expirados</h1>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Atraso</th>
                    </tr>
                    <tr>
                        <td>Alysson Lopes</td>
                        <td><a href="info-livro.php?isbn=1234567890" title="Informações do Livro">Velocidade</a></td>
                        <td>Dean Koontz</td>
                        <td>9 dias</td>
                    </tr>
                    <tr>
                        <td>João da Silva</td>
                        <td><a href="info-livro.php?isbn=5123467890" title="Informações do Livro">Vidas Secas</a></td>
                        <td>Graciliano Ramos</td>
                        <td>8 dias</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td><a href="info-livro.php?isbn=3124567890" title="Informações do Livro">O Peixe de Amarna</a></td>
                        <td>Cícero Sandroni</td>
                        <td>8 dias</td>
                    </tr>
                    <tr>
                        <td>Maria dos Santos</td>
                        <td><a href="info-livro.php?isbn=9123456780" title="Informações do Livro">Fortaleza Digital</a></td>
                        <td>Dan Brown</td>
                        <td>6 dias</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td><a href="info-livro.php?isbn=7123456890" title="Informações do Livro">O Guarani</a></td>
                        <td>José de Alencar</td>
                        <td>4 dias</td>
                    </tr>
                </table>
                <div id="caixa-botão">
                    <a class="botão neutro voltar" href="index.php">Voltar</a>
                </div>
                <div style="clear:both"></div>
            </section>
        </div>
        <?php include("../footer.html"); ?>
    </body>
</html>