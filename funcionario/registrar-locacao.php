<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Registrar Locação | BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto:300|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Registrar Locação</h1>
                <form id="form" method="post" action="home.php">
                    <div class="campo _1-2-3 e">
                        <label class="label" for="nome">Nome completo</label>
                        <input id="nome" type="text" name="nome" class="caixa" required disabled>
                    </div>
                    <div class="campo _1-1-3 d primeiro">
                        <label class="label" for="cpf">CPF</label>
                        <input type="text" name="cpf" class="caixa" onkeypress="javascript:mascara(this, cpf_mask);" id="cpf" onfocus="ativar(this);" onblur="desativar(this);"  maxlength="14" autofocus required>
                    </div>
                    <div style="clear:both"></div>
                    <div class="campo">
                        <label class="label" for="titulo">Título</label>
                        <input id="titulo" class="caixa" type="text" name="titulo" disabled required>
                    </div>
                    <div class="campo">
                        <label class="label" for="sub">Subtítulo</label>
                        <input id="sub" class="caixa" type="text" name="sub" disabled>
                    </div>
                    <div class="campo">
                        <label class="label" for="autor">Autor</label>
                        <input id="autor" class="caixa" type="text" name="autor" disabled required>
                    </div>
                    <div class="campo _1-3 e ultimo">
                        <label class="label" for="isbn">ISBN</label>
                        <input id="isbn" class="caixa" type="text" name="isbn" onfocus="ativar(this);" onblur="desativar(this);" required>
                    </div>
                    <div class="campo _2-3">
                        <label class="label" for="editora">Editora</label>
                        <input id="editora" class="caixa" type="text" name="editora" disabled required>
                    </div>
                    <div class="campo _3-3 d ultimo">
                        <label class="label" for="status">Status</label>
                        <input id="status" class="caixa" type="text" name="status" disabled required>
                    </div>
                    <div style="clear:both"></div>
                    <div id="caixa-botão">
                        <a id="esquerdo" class="botão neutro cancelar" href="index.php">Cancelar</a>
                        <button id="direito" class="botão positivo" type="submit">Salvar</button>
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