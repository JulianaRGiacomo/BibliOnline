<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta lang="pt">
        <title>O Acervo - BibliOnline</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="/css/table.css">
        <link rel="stylesheet" href="/css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php include("../header.html"); ?>
        <div id="conteudo">
            <section id="main" style="width:100%;">
                <h1>Acervo</h1>
                <table>
                    <caption>Livros da Biblioteca</caption>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Harry Potter e A Pedra Filosofal</td>
                        <td>J. K. Rowling</td>
                        <td>Locado</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar" disabled>Reservar</button></td>
                    </tr>
                    <tr>
                        <td>A Hospedeira</td>
                        <td>Stephenie Meyer</td>
                        <td>Reservado</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                       <td>Toda Poesia</td>
                        <td>Paulo Leminski</td>
                        <td>Disponível</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                        <td>Java - Como programar</td>
                        <td>Paul J. Deitel, Dr Harvey M. Deitel</td>
                        <td>Disponível</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                        <td>Millennium:A Rainha do Castelo de Ar</td>
                        <td>Stieg Larsson</td>
                        <td>Locado</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar" disabled>Reservar</button></td>
                    </tr>
                    <tr>
                        <td>Contos Inacabados</td>
                        <td>J. R. R. Tolkien</td>
                        <td>Disponível</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                        <td>O Alquimista</td>
                        <td>Paulo Coelho</td>
                        <td>Locado</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar" disabled>Reservar</button></td>
                    </tr>
                    <tr>
                        <td>Matemática Finaceira</td>
                        <td>De Francisco</td>
                        <td>Disponível</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                        <td>Velocidade</td>
                        <td>Dean Koontz</td>
                        <td>Reservado</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                        <td>Vidas Secas</td>
                        <td>Graciliano Ramos</td>
                        <td>Disponível</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                        <td>O Peixe de Amarna</td>
                        <td>Cícero Sandroni</td>
                        <td>Locado</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar" disabled>Reservar</button></td>
                    </tr>
                    <tr>
                        <td>Fortaleza Digital</td>
                        <td>Dan Brown</td>
                        <td>Disponível</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar">Reservar</button></td>
                    </tr>
                    <tr>
                        <td>O Guarani</td>
                        <td>José de Alencar</td>
                        <td>Locado</td>
                        <td><button type="button" class="botão positivo reservar" name="livro" title="Reservar" disabled>Reservar</button></td>
                    </tr>
                </table>
                <div id="caixa-botão">
                    <a class="botão neutro voltar" href="index.php">Voltar</a>
                </div>
                <div style="clear:both"></div>
            </section>
        </div>
        <?php include("../footer.html"); ?>
        <script type="text/javascript" src="/js/menu.js"></script>
    </body>
</html>