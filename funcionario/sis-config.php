<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>Configurações do Sistema | BibliOnline</title>
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="../css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto:300|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main">
                <h1>Configurações do Sistema</h1>
                <form id="form">
                    <div class="metade primeiro">
                        <div class="campo _1-2">
                            <label class="label">Funcionários podem locar livros?</label>
                            <input type="radio" name="f_pode" value="sim" id="f_pode" onfocus="ativar(this)" onblur="desativar(this)" checked> <label for="f_pode">Sim</label>
                            <input type="radio" name="f_pode" value="nao" id="f_pode" onfocus="ativar(this)" onblur="desativar(this)"> <label for="f_pode">Não</label> 
                        </div>
                        <div class="campo _2-2">
                            <label class="label" for="tempo_reserva">Tempo de reserva de um livro (dias corridos)</label>
                            <input type="number" class="caixa dias" name="tempo_reserva" id="tempo_reserva" value="4" onfocus="ativar(this)" onblur="desativar(this)" min="0" step="1"> dias
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="metade">
                        <div class="campo _1-2">
                            <label class="label" for="prazo_dev">Prazo de devolução de um livro (dias corridos)</label>
                            <input type="number" class="caixa dias" name="prazo_dev" id="prazo_dev" value="7" onfocus="ativar(this)" onblur="desativar(this)"> dias
                        </div>
                        <div class="campo _2-2">
                            <label class="label" for="tolerancia">Tempo de tolerância de atraso (zero para sem tolerância)</label>
                            <input type="number" class="caixa dias" name="tolerancia" id="tolerancia" value="0" onfocus="ativar(this)" onblur="desativar(this)" min="0" step="1"> dias
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div id="caixa-botão">
                        <a id="esquerdo" class="botão neutro voltar" href="configuracoes.php">Voltar</a>
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