<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Registrar Locação - BibliOnline</title>
        <!--importando o FontAwesome-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <!--importando css da página-->
        <link rel="stylesheet" href="/css/form.css">
        <!--importando a fonte Roboto e Comfortaa do Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Registrar Locação</h1>
                <form id="form" method="post" action="home.php">
                    <input type="text" name="nome" class="caixa" placeholder="Nome Completo do Usuário" required disabled>
                    <input type="text" name="cpf" class="caixa metade" placeholder="CPF do Usuário" onkeypress="javascript:mascara(this, cpf_mask);"  maxlength="14" autofocus required>
                    <input type="text" name="rg" class="caixa metade" placeholder="RG do Usuário" disabled required>
                    <input type="email" name="email" class="caixa metade" placeholder="Email do Usuário" disabled required>
                    <input type="text" name="celular" class="caixa metade" placeholder="Celular do Usuário" disabled>
                    <input class="caixa" type="text" name="titulo" placeholder="Título do Livro" disabled required>
                    <input class="caixa" type="text" name="sub" placeholder="Subtítulo do Livro" disabled>
                    <input class="caixa" type="text" name="autor" placeholder="Autor(es) do Livro" disabled required>
                    <input class="caixa metade" type="text" name="isbn" placeholder="ISBN do Livro" required>
                    <input class="caixa metade" type="text" name="editora" placeholder="Editora do Livro" disabled required>
                    <div id="caixa-botão">
                        <input id="esquerdo" class="botão" type="button" value="Cancelar" onclick="location.href='home.php'">
                        <input id="direito" class="botão" type="submit" value="Salvar">
                    </div>
                    <div style="clear:both"/>
                </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
        <script type="text/javascript" src="/js/formatarCPF.js"></script>
    </body>
</html>