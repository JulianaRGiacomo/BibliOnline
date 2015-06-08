<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>O Acervo | BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto:300|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main" style="width:100%;">
                <h1>Acervo</h1>
                <table>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Status</th>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=1234567890'" class="click">
                        <td>Harry Potter e A Pedra Filosofal</td>
                        <td>J. K. Rowling</td>
                        <td>Locado</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=0123456789'" class="click">
                        <td>A Hospedeira</td>
                        <td>Stephenie Meyer</td>
                        <td>Reservado</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=9876543210'" class="click">
                       <td>Toda Poesia</td>
                        <td>Paulo Leminski</td>
                        <td>Disponível</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=0987654321'" class="click">
                        <td>Java - Como programar</td>
                        <td>Paul J. Deitel, Dr Harvey M. Deitel</td>
                        <td>Disponível</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=1526385390'" class="click">
                        <td>Millennium:A Rainha do Castelo de Ar</td>
                        <td>Stieg Larsson</td>
                        <td>Locado</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=7128403546'" class="click">
                        <td>Contos Inacabados</td>
                        <td>J. R. R. Tolkien</td>
                        <td>Disponível</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=0193452378'" class="click">
                        <td>O Alquimista</td>
                        <td>Paulo Coelho</td>
                        <td>Locado</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=7581045379'" class="click">
                        <td>Matemática Finaceira</td>
                        <td>De Francisco</td>
                        <td>Disponível</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=1935750124'" class="click">
                        <td>Velocidade</td>
                        <td>Dean Koontz</td>
                        <td>Reservado</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=0527478194'" class="click">
                        <td>Vidas Secas</td>
                        <td>Graciliano Ramos</td>
                        <td>Disponível</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=9021646824'" class="click">
                        <td>O Peixe de Amarna</td>
                        <td>Cícero Sandroni</td>
                        <td>Locado</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=9149046212'" class="click">
                        <td>Fortaleza Digital</td>
                        <td>Dan Brown</td>
                        <td>Disponível</td>
                    </tr>
                    <tr onclick="location='info-livro.php?isbn=9124412441'" class="click">
                        <td>O Guarani</td>
                        <td>José de Alencar</td>
                        <td>Locado</td>
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