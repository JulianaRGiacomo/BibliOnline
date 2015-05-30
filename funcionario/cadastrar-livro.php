<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Cadastrar Livro - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Cadastrar Livro</h1>
                <form id="form" method="post" action="home.php">
                    <div class="campo">
                        <label class="label" for="titulo">Título</label>
                        <input id="titulo" class="caixa" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="titulo" required autofocus>
                    </div>
                    <div class="campo">
                        <label class="label" for="subtitulo">Subtítulo</label>
                        <input class="caixa" onfocus="ativar(this);" onblur="desativar(this);" id="subtitulo" type="text" name="subtitulo" >
                    </div>
                    <div class="campo">
                        <label class="label" for="autor">Autor</label>
                        <input id="autor" class="caixa" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="autor" required>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2">
                            <label class="label" for="editora">Editora</label>
                            <input id="editora" class="caixa" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="editora" required>
                        </div>
                        <div class="campo _2-3">
                            <label class="label" for="ano">Ano de Publicação</label>
                            <input id="ano" class="caixa" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="ano" required>
                        </div>
                        <div class="campo _3-3">
                            <label class="label" for="quantidade">Quantidade</label>
                            <input id="quantidade" class="caixa" onfocus="ativar(this);" onblur="desativar(this);" type="number" min="1" step="1" value="1" name="quantidade" pattern="[0-9]+$" required>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="campo _1-1-3 e">
                        <label class="label" for="isbn">ISBN</label>
                        <input id="isbn" class="caixa" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="isbn" required>
                    </div>
                    <div class="campo _1-2-3 d">
                        <label class="label" for="tags">Tags (separe por vírgulas)</label>
                        <input id="tags" class="caixa" onfocus="ativar(this);" onblur="desativar(this);" type="text" name="tags" required>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2 ultimo">
                            <label class="label">Tipo  do livro</label>
                            <input type="radio" name="tipo" value="didatico" id="didatico" onclick="verificaTipo()" onfocus="ativar(this)" onblur="desativar(this)" checked><label for="didatico">Didático</label></input>
                            <input type="radio" name="tipo" value="paradidatico" id="paradidatico" onclick="verificaTipo()" onfocus="ativar(this)" onblur="desativar(this)"><label for="paradidatico">Paradidático</label></input>
                            <input type="radio" name="tipo" value="romance" id="romance" onclick="verificaTipo()" onfocus="ativar(this)" onblur="desativar(this)"><label for="romance">Romance</label></input>
                        </div>
                        <div id="campo-genero" class="campo _2-2 ultimo">
                            <label class="label" for="genero">Gênero</label>
                            <input id="genero" class="caixa" onfocus="ativar(this)" onblur="desativar(this)" type="text" name="genero" >
                        </div>
                        <div style="clear:both"></div>
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
        <script type="text/javascript" src="../js/verificaTipo.js"></script>
        <script type="text/javascript" src="../js/form.js"></script>
    </body>
</html>