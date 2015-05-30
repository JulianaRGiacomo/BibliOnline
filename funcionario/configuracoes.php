<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>BibliOnline</title>
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Configurações</h1>
                <form id="form">
                    <div class="metade primeiro">
                        <div class="campo _1-2">
                            <label class="label" for="nome">Nome de Perfil</label>
                            <input type="text" name="nome" id="nome" class="caixa" value="Ricardo Rubens" onfocus="ativar(this)" onblur="desativar(this)">
                        </div>
                        <div class="campo _2-2">
                            <label class="label" for="email">E-mail</label>
                            <input type="text" name="email" id="email" class="caixa" value="ricardo@mail.com" onfocus="ativar(this)" onblur="desativar(this)">
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2">
                            <label class="label" for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="caixa" value="99999-9999" onfocus="ativar(this)" onblur="desativar(this)">
                        </div>
                        <div class="campo _2-2">
                            <button type="button" class="botão positivo config" style="height:auto; margin-top:10px;" onclick="location='sis-config.php';">Configurações do Sistema</button>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2">
                            <button type="button" class="botão negativo alerta" style="height:auto; margin-top:10px;" onclick="window.location='sis-config.php';">Alterar Senha</button>
                        </div>
                        <div class="campo _2-2">
                            <button type="button" class="botão negativo" style="height:auto; margin-top:10px;">Excluir Conta</button>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div id="caixa-botão">
                        <a id="esquerdo" class="botão neutro cancelar" href="index.php">Cancelar</a>
                        <button id="direito" class="botão positivo" type="submit">Salvar Alterações</button>
                    </div>
                    <div style="clear:both"></div>
                </form>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="../js/form.js"></script>
    </body>
</html>