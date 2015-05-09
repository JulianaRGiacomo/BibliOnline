<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Listar Devoluções - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main" style="width:100%;">
                <h1>Listar Devoluções</h1>
                <table>
                    <caption>Últimas Devoluções</caption>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Funcionário</th>
                        <th>Data/Hora</th>
                    </tr>
                    <tr>
                        <td>Alysson Lopes</td>
                        <td>123.456.789-01</td>
                        <td>Harry Potter e A Pedra Filosofal</td>
                        <td>J. K. Rowling</td>
                        <td>1234567890</td>
                        <td>Ricardo Rubens</td>
                        <td>28/04/2015<br>14h20</td>
                    </tr>
                    <tr>
                        <td>Alysson Lopes</td>
                        <td>123.456.789-01</td>
                        <td>A Hospedeira</td>
                        <td>Stephenie Meyer</td>
                        <td>9123456780</td>
                        <td>Larry Page</td>
                        <td>27/04/2015<br>18h00</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>987.654.321-09</td>
                        <td>A Menina Que Roubava Livros</td>
                        <td>Markus Zusack</td>
                        <td>3124567890</td>
                        <td>Bill Gates</td>
                        <td>27/04/2015<br>15h34</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>987.654.321-09</td>
                        <td>O Alquimista</td>
                        <td>Paulo Coelho</td>
                        <td>7123456890</td>
                        <td>Hugo Barra</td>
                        <td>25/04/2015<br>7h57</td>
                    </tr>
                    <tr>
                        <td>João da Silva</td>
                        <td>567.890.123-41</td>
                        <td>Millennium:A Rainha do Castelo de Ar</td>
                        <td>Stieg Larsson</td>
                        <td>5123467890</td>
                        <td>Edward Snowden</td>
                        <td>20/04/2015<br>17h03</td>
                    </tr>
                </table>
                <div id="caixa-botão">
                    <a class="botão neutro voltar" href="index.php">Voltar</a>
                </div>
                <div style="clear:both"></div>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
    </body>
</html>