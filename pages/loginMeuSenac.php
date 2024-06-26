<?php 
	session_start();
	$_SESSION['pagina_anterior'] = $_SERVER['HTTP_REFERER'];
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../img/logos/LogoVertical-Senac-Regional_cor.jpg">
	<link rel="stylesheet" type="text/css" href="../styles/menu.css">
	<link rel="stylesheet" type="text/css" href="../styles/styleMeuSenac.css">
	<link rel="stylesheet" type="text/css" href="../styles/rodape.css">
	<title>Meu Senac</title>
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
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./loginMeuSenac.php");
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

    <br>
		
	<!-- Conteúdo Principal -->
	<section>
		<article>
			<div class="formP">
				<p>Logar em Meu Senac</p>
				<p>O Senac-RS tem tudo o que você precisa para se inserir no mercado de trabalho com segurança.</p>
				<p>Todos os campos são obrigatórios.</p>
			</div>

			<form action="../php/verificarLogin.php" method="post">
				<!-- Fieldset é usado para agrupar elementos -->
				<fieldset><!-- Início do fieldset principal -->

					<fieldset class="bloco">
						<div class="dados">
							<label for="cpf">*CPF:</label>
							<input type="text" id="cpf" name="cpf" maxlength="11"
								title="Somente números, sem ponto ou traço" 
								pattern="[0-9]{11}" required>
						</div>
					</fieldset>


					<fieldset class="bloco">
						<div class="dados">
							<label for="senha">*Senha:</label>
							<input type="password" name="senha" id="senha" required>
						</div>
					</fieldset>

					<button type="submit" class="botao" name="entrar">Logar</button>

				</fieldset><!-- Fim do fieldset principal -->
			</form>
		</article>
	</section>
	
	<!--Rodapé do site -->
	<br>
    <br>
    <br>
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