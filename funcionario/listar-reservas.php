<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Listar Reservas - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main" style="width:100%;">
                <h1>Reservas em Aberto</h1>
                <table>
                    <tr onclick="location='registrar-locac      th>PFao.php?cpf=&isbn=  <th>ISBN'" class="click">
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>ISBN</th>
                        <th>Título</th>
                        <th>Reservado até</th>
                    </tr>
                    <tr onclick="location='registrar-locacao.php?cpf=12345678901&isbn=1234567890'" class="click">
                        <td>123.456.789-01</td>
                        <td>Alysson Lopes</td>
                        <td>1234567890</td>
                        <td>Harry Potter e A Pedra Filosofal</td>
                        <td>30/04/2015</td>
                    </tr>
                    <tr onclick="location='registrar-locacao.php?cpf=12345678901&isbn=9123456780'" class="click">
                        <td>123.456.789-01</td>
                        <td>Alysson Lopes</td>
                        <td>9123456780</td>
                        <td>A Hospedeira</td>
                        <td>2/05/2015</td>
                    </tr>
                    <tr onclick="location='registrar-locacao.php?cpf=98765432109&isbn=3124567890'" class="click">
                        <td>987.654.321-09</td>
                        <td>Juliana Giacomo</td>
                        <td>3124567890</td>
                        <td>A Menina Que Roubava Livros</td>
                        <td>3/05/2015</td>
                    </tr>
                    <tr onclick="location='registrar-locacao.php?cpf=98765432109&isbn=7123456890'" class="click">
                        <td>987.654.321-09</td>
                        <td>Juliana Giacomo</td>
                        <td>7123456890</td>
                        <td>O Alquimista</td>
                        <td>5/05/2015</td>
                    </tr>
                    <tr onclick="location='registrar-locacao.php?cpf=56789012341&isbn=5123467890'" class="click">
                        <td>567.890.123-41</td>
                        <td>João da Silva</td>
                        <td>5123467890</td>
                        <td>Millennium:A Rainha do Castelo de Ar</td>
                        <td>5/05/2015</td>
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