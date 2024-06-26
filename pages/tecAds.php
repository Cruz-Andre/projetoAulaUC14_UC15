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
    <link rel="stylesheet" type="text/css" href="../styles/stylesTecAds.css">
    <link rel="stylesheet" type="text/css" href="../styles/rodape.css">
    <title>Curso Técnico em Desenvolvimento de Sistemas</title>
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
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./tecAds.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./tecAds.php");
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
            <h2>Técnico em Desenvolvimento de Sistemas</h2>
            <h3>Curso técnico de 1216 horas</h3>
            <p><img src="../img/tecADS.jpg" alt="Técnico em Desenvolvimento de Sistemas" width="400"
                    title="Técnico em Desenvolvimento de Sistemas"></p>
        </div>

        <div class="textoPrinc">
            <p>
                você terá a qualificação necessária para atuar na área de desenvolvimento, com um grande diferencial: a
                habilidade
                comunicacional em língua inglesa, para falar com um mercado cada dia mais globalizado.
            </p>
            <p>
                A área de desenvolvimento de sistemas emprega milhares de pessoas todos os dias e muitas das vagas não
                são supridas por
                falta de talentos. Segundo a Brasscom, Associação das Empresas de Tecnologia da Informação e Comunicação
                (TIC) e de
                Tecnologias Digitais, o segmento deverá precisar de 70 mil profissionais por ano, até 2024.
            </p>
            <p>
                Chegou a sua vez! Com 1.216 horas, o curso prepara o profissional para desenvolver sistemas
                computacionais utilizando o
                ambiente de desenvolvimento, seguindo as normas e especificações da lógica e das linguagens de
                programação bem como a
                modelagem, implementação e manutenção do banco de dados.
            </p>
            <p>
                Além disso, a formação prepara para o desenvolvimento, a manutenção e testes de programas de computador,
                adotando normas
                técnicas e de qualidade. Apesar de o curso ser bilíngue, o aluno não precisa saber inglês para
                ingressar.
                As aulas de inglês são ministradas de acordo com o andamento do conteúdo tecnológico e, dessa forma, são
                trabalhadas a
                fala, escrita e leitura relacionadas à profissão.
            </p>
            <p>
                Assim, você estará preparado para atuar em diversas frentes de trabalho, podendo empreender na área ou
                buscar seu
                primeiro estágio já nos primeiros meses de curso. A qualificação é uma excelente oportunidade para
                ingressar no mercado
                de trabalho, com muitas possibilidades de atuação. Venha para o Técnico em Desenvolvimento de Sistemas -
                Bilíngue do
                Senac-RS.
            </p>
        </div>

        <div class="programa">
            <h3>Programa:</h3>
            <ul type="circle">
                <li>
                    <h3>Planejar o desenvolvimento de software (72 horas)</h3>
                </li>
                <li>
                    <h3>Desenvolver algoritmos (108 horas)</h3>
                </li>
                <li>
                    <h3>Auxiliar na modelagem e manipulação de banco de dados (96 horas)</h3>
                </li>
                <li>
                    <h3>Auxiliar na administração de banco de dados (84 horas)</h3>
                </li>
                <li>
                    <h3>Projeto integrador I (34 horas)</h3>
                </li>
                <li>
                    <h3>Desenvolver código orientado a objetos (108 horas)</h3>
                </li>
                <li>
                    <h3>Auxiliar na elaboração de projeto de sistema orientado a objeto (72 horas)</h3>
                </li>
                <li>
                    <h3>Desenvolver interface para melhor experiência do usuário. (60 horas)</h3>
                </li>
                <li>
                    <h3>Desenvolver e organizar interface gráfica para aplicações desktop (96 horas)</h3>
                </li>
                <li>
                    <h3>Programar aplicativos computacionais com integração de banco de dados para desktop (108 horas)
                    </h3>
                </li>
                <li>
                    <h3>Projeto integrador II (25 horas)</h3>
                </li>
                <li>
                    <h3>Gerenciar a configuração e versionamento de Software (60 horas)</h3>
                </li>
                <li>
                    <h3>Desenvolver e organizar interface de usuário e elementos visuais para aplicações web.
                        (front-end) (96 horas)</h3>
                </li>
                <li>
                    <h3>Programar aplicativos computacionais com integração de banco de dados para web. (back-end) (96
                        horas)</h3>
                </li>
                <li>
                    <h3>Projeto integrador III (25 horas)</h3>
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
                        <h3>08/04/2024</h3>
                    </td>
                    <td rowspan="2">
                        <h3>08/04/2024 até 10/03/2026</h3>
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