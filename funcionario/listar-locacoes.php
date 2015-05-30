<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Listar Locações - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main" style="width:100%;">
                <h1>Últimas Locações</h1>
                <table>
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
                        <td>Velocidade</td>
                        <td>Dean Koontz</td>
                        <td>1234567890</td>
                        <td>Ricardo Rubens</td>
                        <td>29/04/2015<br>15h34</td>
                    </tr>
                    <tr>
                        <td>João da Silva</td>
                        <td>567.890.123-41</td>
                        <td>Vidas Secas</td>
                        <td>Graciliano Ramos</td>
                        <td>5123467890</td>
                        <td>Edward Snowden</td>
                        <td>27/04/2015<br>17h03</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>987.654.321-09</td>
                        <td>O Peixe de Amarna</td>
                        <td>Cícero Sandroni</td>
                        <td>3124567890</td>
                        <td>Bill Gates</td>
                        <td>29/04/2015<br>14h20</td>
                    </tr>
                    <tr>
                        <td>Maria dos Santos</td>
                        <td>812.654.378-19</td>
                        <td>Fortaleza Digital</td>
                        <td>Dan Brown</td>
                        <td>9123456780</td>
                        <td>Larry Page</td>
                        <td>28/04/2015<br>18h00</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>987.654.321-09</td>
                        <td>O Guarani</td>
                        <td>José de Alencar</td>
                        <td>7123456890</td>
                        <td>Hugo Barra</td>
                        <td>28/04/2015<br>7h57</td>
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