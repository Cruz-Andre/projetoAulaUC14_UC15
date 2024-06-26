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
    <link rel="stylesheet" type="text/css" href="../styles/stylesLocalizacao.css">
    <link rel="stylesheet" type="text/css" href="../styles/rodape.css">
    <title>Localização Senac Tech</title>
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
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./localizacao.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./localizacao.php");
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
    <div class="local">
        <h1>Venâncio Aires, 93. Cidade Baixa - Porto Alegre - RS CEP 900040-191</h1>
        <h1>(51) 3288-7750</h1>
        <h1>Horário de funcionamento:</h1>
        <h1>Dias úteis: 08:30 - 20:00</h1>
    </div>
    
    <div class="localIfrImg">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.791615293089!2d-51.2214678237492!3d-30.042835674924365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567e901f85%3A0x419bba8824e42f95!2sAv.%20Ven%C3%A2ncio%20Aires%2C%2093%20-%20Cidade%20Baixa%2C%20Porto%20Alegre%20-%20RS%2C%2090040-191!5e0!3m2!1spt-BR!2sbr!4v1707263034931!5m2!1spt-BR!2sbr"
            style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        
        <img src="../img/frenteEscola.jfif" alt="">
    </div>
    <!-- Fim Conteúdo Principal -->
    
    <hr>
    
    <section class="conquistas"> 
        <div>
            <h2>Nossas Conquistas</h2>
        </div>
        <div class="conqLogos">
            <img src="../img/nossasConquistas/TopCidadania-ColorBlack.png" alt="" width="200px" hspace="18">
            <img src="../img/nossasConquistas/top_ser_humano_abrh-rs_2018.png" alt="" width="200px" hspace="18">
            <img src="../img/nossasConquistas/top_de_marketing_advb-rs_2018.png" alt=""width="200px" hspace="18">
            <img src="../img/nossasConquistas/great_place_to_work.png" alt=""width="100px" hspace="18">
            <img src="../img/nossasConquistas/top_of_mind_2018.png" alt=""width="100px" hspace="18">
            <img src="../img/nossasConquistas/melhores_em_gestao.png" alt=""width="200px" hspace="18">
            <img src="../img/nossasConquistas/fundibeq.jpg" alt=""width="100px" hspace="18">
        </div>
    </section>

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