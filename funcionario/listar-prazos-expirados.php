<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Prazos Expirados - BibliOnline</title>
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
            <section id="main" style="width:100%;">
                <h1>Prazos Expirados</h1>
                <table>
                    <caption>Atrasos</caption>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Data/Hora da Locação</th>
                        <th>Atraso</th>
                    </tr>
                    <tr>
                        <td>Alysson Lopes</td>
                        <td>alysson@mail.com</td>
                        <td>(82)9999-9999</td>
                        <td>Velocidade</td>
                        <td>Dean Koontz</td>
                        <td>1234567890</td>
                        <td>20/04/2015<br>15h34</td>
                        <td>9 dias</td>
                    </tr>
                    <tr>
                        <td>João da Silva</td>
                        <td>joao@mail.com</td>
                        <td>(82)7777-7777</td>
                        <td>Vidas Secas</td>
                        <td>Graciliano Ramos</td>
                        <td>5123467890</td>
                        <td>21/04/2015<br>17h03</td>
                        <td>8 dias</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>juliana@mail.com</td>
                        <td>(82)8888-8888</td>
                        <td>O Peixe de Amarna</td>
                        <td>Cícero Sandroni</td>
                        <td>3124567890</td>
                        <td>21/04/2015<br>14h20</td>
                        <td>8 dias</td>
                    </tr>
                    <tr>
                        <td>Maria dos Santos</td>
                        <td>maria@mail.com</td>
                        <td>(82)3333-3333</td>
                        <td>Fortaleza Digital</td>
                        <td>Dan Brown</td>
                        <td>9123456780</td>
                        <td>23/04/2015<br>18h00</td>
                        <td>6 dias</td>
                    </tr>
                    <tr>
                        <td>Juliana Giacomo</td>
                        <td>juliana@mail.com</td>
                        <td>(82)8888-8888</td>
                        <td>O Guarani</td>
                        <td>José de Alencar</td>
                        <td>7123456890</td>
                        <td>25/04/2015<br>7h57</td>
                        <td>4 dias</td>
                    </tr>
                </table>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
    </body>
</html>