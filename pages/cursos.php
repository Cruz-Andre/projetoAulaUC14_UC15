<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles/menu.css">
	<link rel="stylesheet" type="text/css" href="../styles/stylesCursos.css">
	<link rel="stylesheet" type="text/css" href="../styles/rodape.css">
	<link rel="icon" type="image/png" href="../img/logos/LogoVertical-Senac-Regional_cor.jpg">
	<title>Cursos Senac Tech</title>
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
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./cursos.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./cursos.php");
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
	<section class="tecInf">
		<h2>Técnico em Informática</h2>
		<div class="tecInfConteudo">
			<img src="../img/tecINF.jfif" alt="Técnico em Informática" title="Técnico em Informática">
			<div class="tecInfTexto">
				<p>Você busca uma oportunidade de inserção no mercado de trabalho?</p>
				<p>A área de Informática fascina você?</p>
				<p>Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos profissionais?</p>
				<p>Se as respostas forem sim, o curso Técnico em Informática do Senac-RS foi feito para você!</p>
				<a class="botaoAqui" href="./tecInf.php">CLIQUE AQUI E SAIBA MAIS!</a>
			</div>
		</div>
	</section>

	<hr>

	<section class="tecADS">
		<h2>Técnico em Desenvolvido de Sistemas</h2>
		<div class="tecADSConteudo">
			<img src="../img/tecADS.jpg" alt="Técnico em Desenvolvido de Sistemas" title="Técnico em Desenvolvido de Sistemas">
			<div class="tecADSTexto">
				<p>O desenvolvimento de novas soluções lhe desafia?</p>
				<p>Você gostaria de trabalhar em uma multinacional?</p>
				<p>O curso Técnico em Desenvolvimento de Sistemas - Bilíngue pode ser o primeiro passo para você realizar esses
					sonhos.</p>
				<a class="botaoAqui" href="./tecAds.php">CLIQUE AQUI E SAIBA MAIS!</a>
			</div>
		</div>
	</section>

	<hr>

	<section class="tecADM">
		<h2>Técnico em Administração</h2>
		<div class="tecADMConteudo">
			<img src="../img/tecADM.jfif" alt="Técnico em Administração" title="Técnico em Administração">
			<div class="tecADMTexto">
				<p>Você busca uma oportunidade de inserção no mercado de trabalho?</p>
				<p>A área Administrativa fascina você?</p>
				<p>Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos empresariais?</p>
				<p>Se as respostas forem sim, o curso Técnico em Administração do Senac-RS foi feito para você!</p>
				<a class="botaoAqui" href="./tecAdm.php">CLIQUE AQUI E SAIBA MAIS!</a>
			</div>
		</div>
	</section>

	<hr>

	<section class="rsTI">
		<img src="../img/logo_rsti_color.png" alt="logo RS TI">
		<img class="rsTIIMG" src="../img/rstiinicial.png" alt="RS TI">
		<a class="botaoAqui" href="./rsTi.php">CLIQUE AQUI E SAIBA MAIS!</a>
	</section>

	<hr>

	<section class="jovApr">
		<img src="../img/aprendiz.jpg" alt="Programa Jovem Aprendiz">
		<a class="botaoAqui" href="./jovemApr.php">CLIQUE AQUI E SAIBA MAIS!</a>
	</section>

	<hr>

	<section>
		<article>
			<h2 class="tituloCurLiv">Cursos Livres do Senac Tech</h2>

			<h3>Análise de Dados com Power BI</h3>
			<h3>Carga horária: 21 Horas</h3>
			<p>
				Você sabia que os dados são o novo ativo de valores das empresas?
			</p>
			<p>
				Para atender a essa demanda, o Senac-RS oferece o
				curso de Análise de Dados com Power BI - uma ferramenta de inteligência de mercado que
				transforma os dados em
				informações para o ganho de vantagem competitiva.
			</p>
			<p>
				Você vai aprender a dominar os painéis da ferramenta de Power BI que possibilitam uma visão
				completa da empresa, com métricas de funcionamento e compilados de dados em um só lugar, além da
				possibilidade de
				explorar elementos em diversos tipos de dispositivos.
			</p>
			<p>
				A Tecnologia da Informação está em todo lugar, porém o mercado carece de profissionais
				habilitados na configuração de
				ferramentas de dados.

			</p>
			<p>
				Por isso, aproveite para inserir-se em uma das áreas que mais cresce atualmente.
			</p>
			<p>
				Seja um editor de Power BI utilizando planilhas eletrônicas em nível avançado e transforme sua
				carreira. Conheça o curso
				de Análise de Dados com Power BI do Senac-RS.
			</p>
		</article>
		<hr>
		<article>
			<h3>Design Gráfico</h3>
			<h3>Carga horária: 264 Horas</h3>
			<p>
				Você sabia que na área de Design existem diversas oportunidades de emprego no Brasil e no
				exterior?
			</p>
			<p>
				Se você sonha com uma carreira versátil, o Design Gráfico é uma ótima opção. Por ser uma área
				essencial para o marketing, comunicação e publicidade, o designer tem sido cada vez mais
				procurado no mercado.
			</p>
			<p>
				Com o curso Design Gráfico do Senac-RS, você irá aprender sobre os recursos de editoração gráfica,
				utilizando
				aplicativos de desenho e manipulação de imagens, planejando, analisando e selecionando os elementos
				necessários à
				construção de projetos gráficos.
			</p>
			<p>
				Durante a capacitação você saberá criar peças gráficas com o CorelDRAW e Illustrator, preparar arquivos para
				impressão,
				montar, editar, manipular e tratar imagens no Photoshop. Além disso, você também irá produzir publicações
				para saída
				eletrônica ou impressa com o InDesign, e, por fim, irá planejar e criar peças gráficas com inovação,
				estética e
				funcionalidade, considerando as características do projeto que o cliente deseja.
			</p>
			<p>
				Faça parte do grupo de profissionais qualificados em Design Gráfico e conduza projetos com excelência e
				qualidade.
			</p>
		</article>
		<hr>
		<article>
			<h3>Formação Excel</h3>
			<h3>Carga horária: 84 Horas</h3>
			<p>
				Curso de Formação Excel é ideal para quem quer aprender a criar e editar gráficos de planilhas em Microsoft
				Excel,
				dominando as fórmulas e funções do programa.
			</p>
			<p>
				Muito além do básico, o curso também ensina você a desenvolver os dashboards - painéis de controles
				estratégicos que nos
				permitem resumir um grande volume de informações, possibilitando comparações de dados e servindo como uma
				importante
				ferramenta para uma tomada de decisão mais rápida e efetiva.
			</p>
			<p>
				Com o domínio do Excel, você poderá criar planilhas envolvendo cálculos matemáticos, desde os mais simples
				aos mais
				complexos: cálculos de orçamentos, previsões e planejamentos, investimentos futuros, tabelas variadas,
				controle de
				gastos pessoais ou de empresas, controle de caixa, entre outros.
			</p>
			<p>
				Faça parte do grupo de profissionais qualificados e adquira conhecimentos para elaborar e gerenciar
				planilhas em
				Microsoft Excel, empregando fórmulas, recursos e ferramentas que permitem agilizar os processos de trabalho.
			</p>
		</article>
		<hr>
		<article>
			<h3>Excel Avançado</h3>
			<h3>Carga horária: 36 Horas</h3>
			<p>
				O Excel é um dos programas mais utilizados no ambiente corporativo.
				A ferramenta permite a criação e manipulação de planilhas de cálculos e a incorporação de gráficos com
				rapidez.
			</p>
			<p>
				Para quem quer aprimorar conhecimentos sobre o seu uso, o Senac-RS tem a continuidade dessa formação, com o
				curso de Excel Avançado.
			</p>
			<p>
				Com 36 horas de duração, durante a capacitação você aprenderá a criar planilhas para cálculos de orçamentos,
				previsões e
				planejamentos, tabelas variadas, controle de gastos, controle de caixa, entre outras opções que envolvam
				cálculos
				matemáticos, empregando recursos avançados do programa.
			</p>
			<p>
				Faça o curso de Excel Avançado e se torne um profissional que busca agilidade nos processos de trabalho,
				facilitando o controle do negócio!
			</p>
		</article>
		<hr>
		<article>
			<h3>Pilotagem de drones com filmagens e fotografias aéreas</h3>
			<h3>Carga horária: 30 Horas</h3>
			<p>
				Os drones têm sido um recurso cada vez mais utilizado para o acompanhamento de vários processos em grandes e
				pequenas
				empresas, através deles é possível fazer filmagens e fotografias aéreas com precisão e agilidade.
			</p>
			<p>
				Com o curso de Pilotagem de Drones com Filmagens e Fotografias Aéreas você vai aprender as principais
				técnicas de
				operação deste instrumento extremamente inovador.
			</p>
			<p>
				Através de uma carga horária de 30 horas, você vai aprender a operação de drones para atuação profissional e
				estará apto
				a pilotar de forma correta, segura e de acordo com a legislação vigente.
			</p>
			<p>
				Além disso, terá o conhecimento necessário para utilizar a filmagem e a fotografia como ferramenta de
				análise de dados
				captados durante a pilotagem do drone.
			</p>
			<p>
				Um curso essencial para quem busca uma nova oportunidade de geração de renda, trabalhando com tecnologia e
				atendendo as
				necessidades atuais dos negócios.
			</p>
			<p>
				Pilote drones, fazendo fotos e filmagens profissionais. Venha para o Senac-RS e conheça o curso de Pilotagem
				de Drones
				com Filmagens e Fotografias Aéreas.
			</p>
		</article>
		<hr>
		<article>
			<h3>Photoshop</h3>
			<h3>Carga horária: 48 Horas</h3>
			<p>
				As organizações necessitam cada vez mais de produções gráficas que auxiliem na promoção e divulgação de suas
				ações.
			</p>
			<p>
				Neste contexto o Photoshop, que é uma das principais soluções da Adobe, está em grande ascensão, com ele é
				possível a
				criação e adequação de projetos.
			</p>
			<p>
				Para atender a demanda de trabalho, surge o curso de Photoshop, que oferece a formação completa para montar,
				editar,
				manipular, e tratar imagens, desenvolvendo habilidades para trabalhar correção de cores, restauração de
				fotos,
				exportação dos arquivos em outros formatos, com preparação para impressão ou internet.
			</p>
			<p>
				O curso é destinado para todas as pessoas que desejam atuar de forma profissional, que possuem o ensino
				fundamental
				completo, com idade mínima de 16 anos. Para participar é necessário ter o curso de Windows e Internet ou
				conhecimento
				equivalente.
			</p>
			<p>
				As aulas são ministradas por docentes com experiência profissional. Após concluir este curso, estará
				disponível o
				certificado de Photoshop, com validade nacional.
			</p>
			<p>
				Atue de forma profissional utilizando o Photoshop e esteja apto a atender as demandas do mercado!
			</p>
		</article>
		<hr>
		<article>
			<h3>INFORMÁTICA E INTERAÇÃO COM SMARTPHONES PARA MATURIDADE</h3>
			<h3>Carga horária: 84 Horas</h3>
			<p>
				Que tal aprender a mexer em seu smartphone?
			</p>
			<p>
				Você quer conversar com amigos e família pela Internet?
			</p>
			<p>
				Quer desenvolver habilidades de mexer em computador?
			</p>
			<p>
				Venha para o Senac-RS fazer o curso de Informática e Interação com Smartphone e Aplicativos para Maturidade.
			</p>
			<p>
				Uma formação única, onde você vai aprender os fundamentos da informática, possibilitando a utilização do
				Windows, a
				navegação na Internet através do navegador de internet do computador, redes sociais e interação com
				Smartphones e além
				disso fará novas amizades com os seus colegas em sala de aula.
			</p>
			<p>
				Entre no mundo digital com o curso de Informática e Interação com Smartphone e Aplicativos para Maturidade
				do Senac-RS.
			</p>
		</article>
		<hr>
		<article>
			<h3>INFORMÁTICA PROFISSIONAL - OFFICE E MOBILE</h3>
			<h3>Carga horária: 120 Horas</h3>
			<p>
				Em um mundo cada vez mais digital, ter noções de informática é pré-requisito básico para quem quer ingressar
				no mercado
				de trabalho ou busca uma recolocação profissional.
			</p>
			<p>
				Pensando nisso, o Senac oferece o curso de Informática Profissional – Office Mobile.
			</p>
			<p>
				Com 120 horas de duração, a capacitação vai ensinar para você as principais ferramentas para a operação de
				computadores,
				como: Windows Profissional, Word, Excel e Power Point, além de um módulo exclusivo sobre internet e redes
				sociais.
			</p>
			<p>
				Conheça o curso de Informática Profissional – Office Mobile do Senac-RS.
			</p>
		</article>

		<article>
			<h2 class="maisInfoCurLiv">Mais informações sobre os cursos livres pelo (51)3288-7750 ou pelo whatsapp 51992015385</h2>
		</article>
	</section>
	<hr>
	<section class="conquistas">
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