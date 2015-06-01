<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Alysson Lopes - Informações do Usuário | BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto:400,300|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Informações do Usuário</h1>
                <h3>Alysson Lopes - <span class="regular">Regular</span></h3>
                <table class="bloco">
                    <caption>Informações</caption>
                    <tr>
                        <th>CPF</th>
                        <td>111.111.111-11</td>
                    </tr>
                    <!--<tr>
                        <th>Subtítulo</th>
                        <td></td>
                    </tr>-->
                    <tr>
                        <th>E-mail</th>
                        <td>alysson@mail.com</td>
                    </tr>
                    <tr>
                        <th>Tipo</th>
                        <td>Usuário</td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td>Rua da Paz, Nº 1207a</td>
                    </tr>
                    <tr>
                        <th>Bairro</th>
                        <td>Bairro da Felicidade</td>
                    </tr>
                    <tr>
                        <th>CEP</th>
                        <td>57010-001</td>
                    </tr>
                    <tr>
                        <th>Celular</th>
                        <td>(82)99999-9999</td>
                    </tr>
                </table>
                <form id="form" method="post" action="index.php">
                    <input type="text" value="9788539522233" name="isbn" hidden="hidden">
                    <div id="caixa-botão">
                        <a class="botão neutro voltar" href="index.php">Voltar</a>
                    <div style="clear:both"></div>
                </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
    </body>
</html>