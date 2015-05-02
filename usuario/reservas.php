<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Minha Reservas - BibliOnline</title>
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
            <section id="main">
                <h1>Minhas Reservas</h1>
                <table>
                    <caption>Previsão das datas para retirada</caption>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Disponível a partir de</th>
                        </tr>
                        <tr>
                            <td>A Hospedeira</td>
                            <td>Stephenie Meyer</td>
                            <td>Hoje</td>
                        </tr>
                        <tr>
                            <td>Millennium:A Rainha do Castelo de Ar</td>
                            <td>Stieg Larsson</td>
                            <td>07/05/2015</td>
                        </tr>
                        <tr>
                            <td>O Peixe de Amarna</td>
                            <td>Cícero Sandroni</td>
                            <td>10/05/2015</td>
                        </tr>
                    </table>
                </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
    </body>
</html>