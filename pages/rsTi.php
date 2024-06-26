<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logos/LogoVertical-Senac-Regional_cor.jpg">
    <link rel="stylesheet" type="text/css" href="../styles/menu.css">
    <link rel="stylesheet" type="text/css" href="../styles/stylesRSTI.css">
    <link rel="stylesheet" type="text/css" href="../styles/rodape.css">
    <title>Programa RS TI</title>
</head>

<body id="s1">
    <!-- Cabeçalho -->
    <hr>
    <header class="cabecalho">
        <input type="checkbox" id="menu" class="cabecalhoBotao">
        <label for="menu" class="cabecalhoLabel"><span class="cabecalhoMenuHamburguer"></span></label>

        <nav class="cabecalhoMenu">
			<ul class="cabecalhoLista">
				<li class="cabecalhoItem"><a class="cabecalhoItemLink cabecalhoItemLinkAtivo"	href="../index.php">INICIO</a></li>
				<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./cursos.php">CURSOS</a></li>
				<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./localizacao.php">LOCALIZAÇÃO</a></li>
				<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./faleConosco.php">FALE CONOSCO</a></li>
				<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./meuSenac.php">MEU SENAC</a></li>
				<?php 
					if (isset($_SESSION['nome_usu_sessao'])) {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./rsTi.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./rsTi.php");
					}
				?>
			</ul>
		</nav>

        <div class="logoImg">
            <img src="../img/logos/LogoBranco.png" alt="logo senac">
        </div>

        <div class="redesSoc">
            <a href="https://www.facebook.com/senactech" target="_blank" rel="noopener noreferrer"><img
                    src="../img/icon_facebook.png" alt="logo facebook"></a>
            <a href="https://www.instagram.com/senactech/" target="_blank" rel="noopener noreferrer"><img
                    src="../img/icon_instagram.png" alt="logo instagram"></a>
        </div>
    </header>
    <hr>
    <!-- Fim Cabecalho -->

    <!-- Conteúdo Principal -->
    <section class="logosRSTI">
        <img src="../img/logo_rsti_color.png" alt="logo RS TI">
        <img src="../img/rstiinicial.png" alt="RS TI">
        <img src="../img/rstiinicialSmall.png" alt="RS TI">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/d08Tno8w5wI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </section>

    <section class="objRSTI">
        <h2>OBJETIVO</h2>
        <h3>
            Capacitar pessoas para atuarem no mercado de Tecnologia da Informação do Rio Grande do Sul, a fim de
            desenvolver
            habilidades técnicas necessárias para atuação como Desenvolvedores de Software.
        </h3>
        <h2>NOSSA ATUAÇÃO</h2>
        <h3>
            O Senac-RS atua há 75 anos na capacitação de profissionais para atuação no mercado de trabalho. Acompanhou a
            evolução
            das tecnologias ao longo do tempo, ofertando cursos atualizados e adequados às demandas das empresas do
            setor de
            comércio de bens, serviços e turismo. Ao longo dos últimos 5 anos, mais de 26 mil alunos foram capacitadas
            pelo
            Senac-RS, na área de Tecnologia da Informação, proporcionando a qualificação do setor.
        </h3>
        <h2>MERCADO BRASILEIRO</h2>
        <img src="../img/mercadoBR.png" alt="Mercado BRASILEIRO"></h3>
        <h2>IMPACTO PROGRAMA RS TI EM 2022 E 2023</h2>
        <img src="../img/impactoRSTI.jpg" alt="IMPACTO PROGRAMA RS TI EM 2022 E 2023">
    </section>

    <table class="tabelaRSTI">
        <thead>
            <tr>
                <td colspan="5">
                    <h2>TRILHAS DE FORMAÇÃO</h2>
                    <h2>Ao total são 4 trilhas de formação e 2 qualificações profissionais presenciais.</h2>
                    <h2>Todas alinhadas com as oportunidades iniciais na área de Tecnologia da Informação.</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Desenvolvimento Front End</h2>
                </td>
                <td>
                    <h2>Desenvolvimento Back End JAVA</h2>
                </td>
                <td>
                    <h2>Desenvolvimento Desktop JAVA</h2>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <h2>Desenvolvimento Python</h2>
                </td>
                <td>
                    <h2>Programador WEB</h2>
                </td>
                <td>
                    <h2>Programador de Sistemas</h2>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <h2>Mais informações pelo (51)3288-7750 ou pelo whatsapp 51993159728</h2>
                </td>
            </tr>
        </tfoot>
    </table>

    <section class="setaUP">
        <a href="#s1">
            <img src="../img/setaParaCima.jpg" alt="uma seta para cima">
        </a>
    </section>

    <!-- Rodape -->
    <hr>
    <footer class="rodape">
        <h4>Senac Tech 2024 &copy</h4>
        <p><img src="../img/senac_logo_new.png" alt="logo senac"></p>
        <h4>Desenvolvido por André Cruz &copy</h4>
    </footer>
    <hr>
</body>

</html>