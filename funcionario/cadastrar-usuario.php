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
                    <div class="campo _1-2-3 primeiro">
                        <label class="label" for="nome">Nome</label>
                        <input id="nome" onload="ativar(this);" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="nome" class="caixa" required autofocus>
                    </div>
                    <div class="campo _1-1-3 primeiro">
                        <label class="label" for="tipo">Tipo</label>
                        <input id="funcionario" onfocus="ativar(this);" onblur="desativar(this);" type="radio" name="funcionario" required><label for="funcionario">Funcionário</label>
                        <input id="usuario" onfocus="ativar(this);" onblur="desativar(this);" type="radio" name="funcionario" required><label for="usuario">Usuário</label>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2">
                            <label class="label" for="cpf">CPF</label>
                            <input id="cpf" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="cpf" class="caixa" onkeypress="javascript:mascara(this, cpf_mask);"  maxlength="14"  required>
                        </div>
                        <div class="campo _2-2">
                            <label class="label" for="rg">RG</label>
                            <input id="rg" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="rg" class="caixa" required>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <fieldset>
                        <legend>Endereço</legend>
                        <div class="metade">
                            <div class="campo _1-2">
                                <label class="label" for="rua">Rua</label>
                                <input id="rua" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="rua" class="caixa" required>
                            </div>
                            <div class="campo _2-2">
                                <label class="label" for="bairro">Bairro</label>
                                <input id="bairro" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="bairro" class="caixa" required>
                            </div>
                        </div>
                        <div class="campo _1-3">
                            <label class="label" for="numero">Número</label>
                            <input id="numero" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="numero" class="caixa" required>
                        </div>
                        <div class="campo _2-3">
                            <label class="label" for="complemento">Complemento</label>
                            <input id="complemento" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="complemento" class="caixa" required>
                        </div>
                        <div class="campo _3-3">
                            <label class="label" for="cep">CEP</label>
                            <input id="cep" onfocus="ativar(this);" onblur="desativar(this);" type="cep" name="cep" class="caixa" required>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Contato</legend>
                        <div class="campo">
                            <label class="label" for="email">E-mail</label>
                            <input id="email" onfocus="ativar(this);" onblur="desativar(this);" type="email" name="email" class="caixa" required>
                        </div>
                        <div class="metade">
                            <div class="campo _1-2">
                                <label class="label" for="telefone">Telefone</label>
                                <input id="telefone" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="telefone" class="caixa">
                            </div>
                            <div class="campo _2-2">
                                <label class="label" for="celular">Celular</label>
                                <input id="celular" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="celular" class="caixa" required>
                            </div>
                        </div>
                    </fieldset>
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
        <script type="text/javascript" src="/js/form.js"></script>
    </body>
</html>