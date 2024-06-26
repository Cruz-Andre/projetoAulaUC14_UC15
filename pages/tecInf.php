<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../img/logos/LogoVertical-Senac-Regional_cor.jpg">
	<link rel="stylesheet" type="text/css" href="../styles/menu.css">
	<link rel="stylesheet" type="text/css" href="../styles/stylesTecInf.css">
	<link rel="stylesheet" type="text/css" href="../styles/rodape.css">
	<title>Curso Técnico em Informática</title>
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
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./tecInf.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./tecInf.php");
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
	<section class="contPrin">
		<div>
			<h2>Técnico em Informática</h2>
			<h3>Curso técnico de 1200 horas</h3>
			<img src="../img/tecINF.jfif" alt="Técnico em Informática" width="400" title="Técnico em Informática">
		</div>

		<div class="textoPrinc">
			<p>
				A formação vai te preparar para fazer o planejamento e pela execução dos processos de manutenção de
				computadores
				e pela
				operação de redes locais de computadores. Além de, desenvolver aplicativos computacionais, adotando
				normas
				técnicas, de
				qualidade, de saúde, de segurança do trabalho e preservação ambiental no desempenho de sua função.
			</p>
			<p>
				Por meio de uma proposta pedagógica adequada às exigências do mundo profissional, o curso oferece nos
				momentos
				presenciais* uma aprendizagem pautada por metodologias que propiciam atuação por projetos, aulas
				práticas,
				teóricas,
				vivenciais e flexíveis com foco no mercado de trabalho. Mas também, momentos mediados por tecnologia**,
				em uma
				plataforma educacional própria, com conteúdos produzidos por tutores altamente qualificados. Ambos os
				modos
				estimulam
				você a experimentar habilidades necessárias para os profissionais do futuro.
			</p>

			<strong>
				<p>Acompanhe a distribuição da carga-horária do currículo:</p>
				<p>Total de horas do curso: 1.200h</p>
				<p>- Momentos presenciais*: 996h</p>
				<p>- Momentos mediados por tecnologias com tutoria ativa**: 204h (no formato EAD - Educação a Distância)
				</p>
			</strong>
		</div>

		<div class="textFim">
			<p>Ao final da formação você estará apto a atuar em empresas de diversos segmentos, além de poder participar
				de
				concursos em organizações públicas.</p>
			<p>Gostou da ideia de ser um profissional completo da área de Informática? Venha para o curso Técnico em
				Informática e mude de vida.</p>
		</div>

		<div class="programa">
			<h3>Programa:</h3>
			<ul type="circle">
				<li>
					<h3>Planejar e executar a montagem de computadores;</h3>
				</li>
				<li>
					<h3>Planejar e executar a instalação de hardware e software para computadores;</h3>
				</li>
				<li>
					<h3>Planejar e executar a manutenção de computadores;</h3>
				</li>
				<li>
					<h3>Planejar e executar a instalação de redes locais de computadores;</h3>
				</li>
				<li>
					<h3>Planejar e executar a manutenção de redes locais de computadores;</h3>
				</li>
				<li>
					<h3>Planejar e executar a instalação, a configuração e o monitoramento de sistemas operacionais de
						redes
						locais (servidores);</h3>
				</li>
				<li>
					<h3>Conceber, analisar e planejar o desenvolvimento de software;</h3>
				</li>
				<li>
					<h3>Executar os processos de codificação, manutenção e documentação de aplicativos computacionais
						para
						desktop;</h3>
				</li>
				<li>
					<h3>Executar os processos de codificação, manutenção e documentação de aplicativos computacionais
						para
						dispositivos móveis;</h3>
				</li>
				<li>
					<h3>Executar os processos de codificação, manutenção e documentação de aplicativos computacionais
						para
						internet;</h3>
				</li>
				<li>
					<h3>Executar teste e implantação de aplicativos computacionais;</h3>
				</li>
				<li>
					<h3>Desenvolver e organizar elementos estruturais de sites;</h3>
				</li>
				<li>
					<h3>Manipular e otimizar imagens vetoriais, bitmaps gráficos e elementos visuais de navegação para
						web.</h3>
				</li>
			</ul>
		</div>

		<table class="tableTurma">
			<thead>
				<tr>
					<td colspan="5">
						<h2>Turmas Disponíveis</h2>
					</td>
				</tr>
				<tr>
					<td>
						<h2>Turno</h2>
					</td>
					<td>
						<h2>Período de Matrículas</h2>
					</td>
					<td>
						<h2>Início</h2>
					</td>
					<td>
						<h2>Período do Curso</h2>
					</td>
					<td>
						<h2>Dias e Horário do Curso</h2>
					</td>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<h3>Manhã</h3>
					</td>
					<td rowspan="2">
						<h3>02/10/2023 até 11/03/2024</h3>
					</td>
					<td rowspan="2">
						<h3>11/03/2024</h3>
					</td>
					<td rowspan="2">
						<h3>11/03/2024 até 11/12/2025</h3>
					</td>
					<td>
						<h3>de segunda a Sexta das 9:15 às 12:15</h3>
					</td>
				</tr>
				<tr>
					<td>
						<h3>Tarde</h3>
					</td>
					<td>
						<h3>de segunda a Sexta das 19:00 às 22:00</h3>
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
	</section>

	<hr>

	<div class="conquistas">
		<div>
			<h2>Nossas Conquistas</h2>
		</div>
		<div class="conqLogos">
			<img src="../img/nossasConquistas/TopCidadania-ColorBlack.png" alt="" width="200px" hspace="18">
			<img src="../img/nossasConquistas/top_ser_humano_abrh-rs_2018.png" alt="" width="200px" hspace="18">
			<img src="../img/nossasConquistas/top_de_marketing_advb-rs_2018.png" alt="" width="200px" hspace="18">
			<img src="../img/nossasConquistas/great_place_to_work.png" alt="" width="100px" hspace="18">
			<img src="../img/nossasConquistas/top_of_mind_2018.png" alt="" width="100px" hspace="18">
			<img src="../img/nossasConquistas/melhores_em_gestao.png" alt="" width="200px" hspace="18">
			<img src="../img/nossasConquistas/fundibeq.jpg" alt="" width="100px" hspace="18">
		</div>
	</div>

	<div class="setaUP">
		<a href="#s1">
			<img src="../img/setaParaCima.jpg" alt="uma seta para cima">
		</a>
	</div>

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