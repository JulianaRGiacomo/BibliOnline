<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="pt">
        <title>BibliOnline</title>
        
         <!--importando o FontAwesome-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <!--importando css da página-->
        <link rel="stylesheet" href="/css/index.css">
        <!--importando a fonte Roboto e Comfortaa do Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="login" style="visibility:hidden;opacity:0">
            <div id="form">
                <form action="login.php" method="post">
                    <input type="text" class="caixa" name="email" placeholder="E-mail">
                    <input class="caixa" name="senha" placeholder="Senha" type="password">
                    <input class="botão" id="ir" type="submit" value="Ir!">
                </form>
            </div>
        </div>
        <section id="splash">
            <span id="logo">bio</span>
            <a onclick="login();" href="javascript:void(0)" class="botão" id="entrar">Entrar</a>
            <section id="info">
                <h1>BibliOnline</h1>
                <p>BibliOnline é a aplicação perfeita para bibliotecas e seus associados facilitando o acesso às informações e à reserva de livros.</p>
                <div id="caixa-botão">
                    <a href="#bibliotecas" class="botão invertido" id="esquerdo">Para Bibliotecas</a>
                    <a href="#locadores" class="botão invertido" id="direito">Para Locadores</a>
                    <div style="clear:both"></div>
                </div>
            </section>
        </section>
        <div class="full" id="bibliotecas">
            <h2>Para as bibliotecas</h2>
            <section>
                <ul>
                    <li>Acervo atualizado em tempo real</li>
                    <li>Relatório de prazos de entrega expirados</li>
                    <li>Controle a disponibilidade dos livros do acervo</li>
                    <li>Notificação e bloqueio automático de locadores irregulares</li>
                </ul>
                </ul>
            </section>
            <div style="clear: both;"></div>
        </div>
        <div class="full" id="locadores">
            <h2>Para os locadores</h2>
            <section>
                <ul>
                    <li>Reserva de livros rápida e fácil</li>
                    <li>Todos os títulos disponíveis numa busca rápida.</li>
                    <li>Lembrentes de data de entrega. Nunca perca o prazo!</li>
                    <li>Renove o prazo de devolução online. Nada de ir até a biblioteca!</li>
                </ul>
            </section>
            <div style="clear: both;"></div>
        </div>
        <?php include("footer.html"); ?>
        <script type="text/javascript" src="/js/login.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
              $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top
                    }, 700);
                    return false;
                  }
                }
              });
            });
        </script>
    </body>
</html>