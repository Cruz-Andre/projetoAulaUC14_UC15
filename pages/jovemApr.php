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
    <link rel="stylesheet" type="text/css" href="../styles/stylesJovemApr.css">
    <link rel="stylesheet" type="text/css" href="../styles/rodape.css">
    <title>Jovem Aprendiz</title>
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
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./jovemApr.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./jovemApr.php");
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
    <section class="jaLogoIframe">
        <img src="../img/aprendiz.jpg" alt="Programa Jovem Aprendiz" width="800px">

        <a href="https://senacrs.com.br/hotsite/jovemaprendiz/docs/2024/EDITAL%20APRENDIZAGEM%202024.pdf"
            target="_blank">
            Confira o edital para empresas
        </a>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/5c4IkasDBqQ?si=GAV2ckj-LBIUPrnu"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </section>

    <section class="jaPrincipal">
        <h2>Deseja contratar um aprendiz Senac? Confira as etapas abaixo</h2>
        <ol>
            <h3>
                <li>Semestralmente, publicamos o Edital da Aprendizagem, apresentando a programação de turmas, por
                    cidade e vagas disponíveis;</li>
            </h3>
            <h3>
                <li>Se sua empresa é contribuinte do Senac, consulte o Edital e siga as instruções para reserva de vagas
                    gratuitas;</li>
            </h3>
            <h3>
                <li>Se sua empresa não é contribuinte, entre em contato com a escola Senac mais próxima e solicite uma
                    proposta;</li>
            </h3>
            <h3>
                <li>Para obter informações detalhadas sobre o Programa Jovem Aprendiz Senac-RS consulte o Guia de
                    Orientação às Empresas;</li>
            </h3>
            <h3>
                <li>Em até 7 dias úteis, você receberá um e-mail de resposta do Senac referente à sua solicitação;</li>
            </h3>
            <h3>
                <li>Após o retorno do Senac com as vagas contempladas, você pode proceder com a contratação do aprendiz
                    e encaminhá-lo com a
                    documentação completa até 15 dias antes do início da turma.</li>
            </h3>
        </ol>

        <hr>

        <h2>Que ser um aprendiz? Confira as etapas abaixo</h2>
        <ol>
            <h3>
                <li>Idade: 14 a 24 anos (não há limite de idade para pessoas com deficiência);</li>
            </h3>
            <h3>
                <li>Escolaridade: Estar cursando escola regular ou ter concluído o ensino médio;</li>
            </h3>
        </ol>

        <img src="../img/oportunidadeJovem.jpg" alt="Programa Jovem Aprendiz" width="300px">
        <h2>Busque uma oportunidade</h2>
        <h3>Procure na Internet e veículos de comunicação, empresas do comércio e de serviços que estejam contratando
            aprendizes.</h3>
        <h3>Após a contratação, a empresa encaminhará sua matrícula em um curso de aprendizagem profissional comercial
            do Senac-RS.</h3>
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