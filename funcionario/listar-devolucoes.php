<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Listar Devoluções | BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto:300|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main" style="width:100%;">
                <h1>Últimas Devoluções</h1>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Título</th>
                        <th>Funcionário</th>
                        <th>Data/Hora</th>
                    </tr>
                    <tr>
                        <td>Alysson Lopes</td>
                        <td>Harry Potter e A Pedra Filosofal</td>
                        <td>Ricardo Rubens</td>
                        <td>28/04/2015<br>14h20</td>
                    </tr>
                    <tr>
                        <td>Alysson Lopes</td>
                        <td>A Hospedeira</td>
                        <td>Larry Page</td>
                        <td>27/04/2015<br>18h00</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>A Menina Que Roubava Livros</td>
                        <td>Bill Gates</td>
                        <td>27/04/2015<br>15h34</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>O Alquimista</td>
                        <td>Hugo Barra</td>
                        <td>25/04/2015<br>7h57</td>
                    </tr>
                    <tr>
                        <td>João da Silva</td>
                        <td>Millennium:A Rainha do Castelo de Ar</td>
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
    </body>
</html>