<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Cadastrar Usuário - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Cadastrar Usuário</h1>
                <form id="form" method="post" action="processa-usuario.php">
                    <div class="campo primeiro">
                        <label class="label" for="nome">Nome</label>
                        <input id="nome" onload="ativar(this);" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="nome" class="caixa" required autofocus maxlength="50">
                    </div>
                    <div class="metade">
                        <div class="campo _1-2">
                            <label class="label" for="cpf">CPF</label>
                            <input id="cpf" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="cpf" class="caixa" onkeypress="javascript:mascara(this, cpf_mask);"  maxlength="14" required>
                        </div>
                        <div class="campo _2-2">
                        <label class="label" for="tipo">Tipo</label>
                        <input id="funcionario" onfocus="ativar(this);" onblur="desativar(this);" type="radio" value="f" name="tipo" required><label for="funcionario">Funcionário</label>
                        <input id="usuario" onfocus="ativar(this);" onblur="desativar(this);" type="radio" value="c" name="tipo" required checked><label for="usuario">Usuário</label>
                    </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2">
                            <label class="label" for="rua">Rua</label>
                            <input id="rua" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="rua" class="caixa" maxlength="50" required>
                        </div>
                        <div class="campo _2-2">
                            <label class="label" for="bairro">Bairro</label>
                            <input id="bairro" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="bairro" class="caixa" maxlength="30" required>
                        </div>
                    </div>
                    <div class="campo _1-3">
                        <label class="label" for="numero">Número</label>
                        <input id="numero" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="numero" class="caixa" maxlength="7" required>
                    </div>
                    <div class="campo _2-3">
                        <label class="label" for="complemento">Complemento</label>
                        <input id="complemento" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="complemento" class="caixa" maxlength="30" required>
                    </div>
                    <div class="campo _3-3">
                        <label class="label" for="cep">CEP</label>
                        <input id="cep" onfocus="ativar(this);" onblur="desativar(this);" type="cep" name="cep" class="caixa" onkeypress="javascript:mascara(this,cep_mask);" maxlength="9" required>
                    </div>
                    <div class="campo _1-2-3 e ultimo">
                        <label class="label" for="email">E-mail</label>
                        <input id="email" onfocus="ativar(this);" onblur="desativar(this);" type="email" name="email" class="caixa" maxlength="40" required>
                    </div>
                    <div class="campo _1-1-3 d ultimo">
                        <label class="label" for="celular">Celular</label>
                        <input id="celular" onfocus="ativar(this);" onblur="desativar(this);" type="tel" name="celular" class="caixa" onkeypress="javascript:mascara(this, cel_mask);"  maxlength="14" required>
                    </div>
                    
                    <div id="caixa-botão">
                        <a id="esquerdo" class="botão neutro cancelar" href="index.php">Cancelar</a>
                        <button id="direito" class="botão positivo" type="submit">Cadastrar</button>
                    </div>
                    <div style="clear:both"></div>
                </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="../js/formatar.js"></script>
        <script type="text/javascript" src="../js/form.js"></script>
    </body>
</html>
