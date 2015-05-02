<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Cadastrar Usuário - BibliOnline</title>
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
                <h1>Cadastrar Usuário</h1>
                <form id="form" method="post" action="home.php">
                    <input type="text" name="nome" class="caixa" placeholder="Nome Completo" required autofocus>
                    <input type="text" name="cpf" class="caixa metade" placeholder="CPF" onkeypress="javascript:mascara(this, cpf_mask);"  maxlength="14"  required>
                    <input type="text" name="rg" class="caixa metade" placeholder="RG" required>
                    <fieldset>
                        <legend>Endereço</legend>
                        <input type="text" name="rua" class="caixa" placeholder="Rua" required>
                        <input type="text" name="bairro" class="caixa" placeholder="Bairro" required>
                        <input type="text" name="numero" class="caixa terco" placeholder="Número" required>
                        <input type="text" name="complemento" class="caixa terco" placeholder="Complemento" required>
                        <input type="cep" name="cep" class="caixa terco" placeholder="CEP" required>
                    </fieldset>
                    <input type="email" name="email" class="caixa" placeholder="Email" required>
                    <input type="text" name="telefone" class="caixa metade" placeholder="Telefone">
                    <input type="text" name="celular" class="caixa metade" placeholder="Celular" required>
                    <div id="caixa-botão">
                        <input id="esquerdo" class="botão" type="button" value="Cancelar" onclick="location.href='home.php'">
                        <input id="direito" class="botão" type="submit" value="Cadastrar">
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