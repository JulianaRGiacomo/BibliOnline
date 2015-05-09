<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Registrar Devolução - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="/css/form.css">
        <link rel="stylesheet" href="/css/table.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Registrar Devolução</h1>
                <form id="form" method="post" action="home.php">
                    <div class="campo">
                        <label class="label" for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" class="caixa" disabled>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2 ultimo">
                            <label class="label" for="cpf">CPF</label>
                            <input id="cpf" type="text" name="cpf" class="caixa" onkeypress="javascript:mascara(this, cpf_mask);"  onfocus="ativar(this);" onblur="desativar(this);" maxlength="14" autofocus required>
                        </div>
                        <div class="campo _2-2 ultimo">
                            <label class="label" for="rg">RG</label>
                            <input id="rg" type="text" name="rg" class="caixa" disabled>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <table>
                        <caption>Livros em Empréstimo a Este Usuário</caption>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>ISBN</th>
                            <th>Prazo</th>
                            <th>Reserva</th>
                            <th>Selecionar</th>
                        </tr>
                        <tr>
                            <td>Harry Potter e A Pedra Filosofal</td>
                            <td>J. K. Rowling</td>
                            <td>1234567890</td>
                            <td>30/04/2015</td>
                            <td>Sim</td>
                            <td><input type="checkbox" name="livro" value="1234567890"></td>
                        </tr>
                        <tr>
                            <td>A Hospedeira</td>
                            <td>Stephenie Meyer</td>
                            <td>9123456780</td>
                            <td>2/05/2015</td>
                            <td>Não</td>
                            <td><input type="checkbox" name="livro" value="9123456780"></td>
                        </tr>
                        <tr>
                            <td>A Menina Que Roubava Livros</td>
                            <td>Markus Zusack</td>
                            <td>3124567890</td>
                            <td>3/05/2015</td>
                            <td>Não</td>
                            <td><input type="checkbox" name="livro" value="3124567890"></td>
                        </tr>
                        <tr>
                            <td>O Alquimista</td>
                            <td>Paulo Coelho</td>
                            <td>7123456890</td>
                            <td>5/05/2015</td>
                            <td>Sim</td>
                            <td><input type="checkbox" name="livro" value="3124567890"></td>
                        </tr>
                        <tr>
                            <td>Millennium:A Rainha do Castelo de Ar</td>
                            <td>Stieg Larsson</td>
                            <td>5123467890</td>
                            <td>5/05/2015</td>
                            <td>Não</td>
                            <td><input type="checkbox" name="livro" value="5123467890"></td>
                        </tr>
                    </table>
                    <div id="caixa-botão">
                        <a id="esquerdo" class="botão neutro cancelar" href="/funcionario/">Cancelar</a>
                        <button id="direito" class="botão positivo" type="submit">Cadastrar</button>
                    </div>
                    <div style="clear:both"></div>
                </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
        <script type="text/javascript" src="/js/formatarCPF.js"></script>
        <script type="text/javascript" src="/js/form.js"></script>
    </body>
</html>