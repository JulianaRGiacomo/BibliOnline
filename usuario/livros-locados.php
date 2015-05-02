<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Livros Comigo - BibliOnline</title>
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
                <h1>Livros Comigo</h1>
                <table>
                    <caption>Renovar prazos</caption>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Prazo</th>
                        <th>Renovar</th>
                    </tr>
                    <tr>
                        <td>A Menina Que Roubava Livros</td>
                        <td>Markus Zusack</td>
                        <td>3/05/2015</td>
                        <td><button type="button" class="botão" name="livro"><i class="fa fa-refresh"></i></button></td>
                    </tr>
                    <tr>
                        <td>O Alquimista</td>
                        <td>Paulo Coelho</td>
                        <td>5/05/2015</td>
                        <td><button type="button" class="botão" name="livro"><i class="fa fa-refresh"></i></button></td>
                    </tr>
                </table>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
    </body>
</html>