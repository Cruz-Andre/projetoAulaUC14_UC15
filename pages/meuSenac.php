<?php 
	session_start();
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
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./meuSenac.php?logout">User: '.$_SESSION['nome_usu_sessao'].' Sair</a></li>';
					} else {
						echo '<li class="cabecalhoItem"><a class="cabecalhoItemLink" href="./loginMeuSenac.php">LOGIN</a></li>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						header("Location: ./meuSenac.php");
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
				<p>Meu Senac</p>
				<p>O Senac-RS tem tudo o que você precisa para se inserir no mercado de trabalho com segurança.</p>
				<p>Todos os campos são obrigatórios.</p>
			</div>

			<form action="../php/processaMS.php" method="post">
				<!-- Fieldset é usado para agrupar elementos -->
				<fieldset><!-- Início do fieldset principal -->

					<fieldset class="bloco">
						<div class="dados">
							<label for="nomeCompleto">*Nome Completo:</label>
							<input type="text" id="nomeCompleto" name="nomeCompleto" 
								title="O nome não pode conter caracteres inválidos." 
								pattern="^[A-Za-zÀ-ÿ\s]+$" required>
						</div>
					</fieldset>
					
					<fieldset class="bloco">
						<div class="dados">
							<label for="celular">*Celular</label>
							<input type="tel" name="celular" id="celular" maxlength="11"
								title="Deve ter 2 digitos para o DDD e 9 para o número" 
								pattern="[0-9]{11}" required>
						</div>
					</fieldset>

					<fieldset class="bloco">
						<div class="dados">
							<label for="estado">*Estado</label>
							<select name="estado" id="estado">
								<option value="Acre">Acre</option>
								<option value="Alagoas">Alagoas</option>
								<option value="Amapá">Amapá</option>
								<option value="Amazonas">Amazonas</option>
								<option value="Bahia">Bahia</option>
								<option value="Ceará">Ceará</option>
								<option value="Distrito Federal">Distrito Federal</option>
								<option value="Espírito Santo">Espírito Santo</option>
								<option value="Goiás">Goiás</option>
								<option value="Maranhão">Maranhão</option>
								<option value="Mato Grosso">Mato Grosso</option>
								<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
								<option value="Minas Gerais">Minas Gerais</option>
								<option value="Pará">Pará</option>
								<option value="Paraíba">Paraíba</option>
								<option value="Paraná">Paraná</option>
								<option value="Pernambuco">Pernambuco</option>
								<option value="Piauí">Piauí</option>
								<option value="Rio de Janeiro">Rio de Janeiro</option>
								<option value="Rio Grande do Sul" selected>Rio Grande do Sul</option>
								<option value="Rio Grande do Norte">Rio Grande do Norte</option>
								<option value="Rondônia">Rondônia</option>
								<option value="Roraima">Roraima</option>
								<option value="Santa Catarina">Santa Catarina</option>
								<option value="São Paulo">São Paulo</option>
								<option value="Sergipe">Sergipe</option>
								<option value="Tocantins">Tocantins</option>
							</select>
						</div>
					</fieldset>

					<fieldset class="bloco">
						<div class="dados">
							<label for="cidade">*Cidade</label>
							<input type="text" id="cidade" name="cidade" 
								title="Apenas caracteres alfabéticos são permitidos" 
								pattern="^[A-Za-zÀ-ÿ\s]+$" required>
						</div>
					</fieldset>

					<fieldset class="bloco">
						<div class="dados">
							<label for="email">*E-mail</label>
							<input type="email" id="email" name="email" 
								title="O formato do e-mail deve ser: nome@provedor.com"
								pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
						</div>
					</fieldset>

					<fieldset class="bloco">
						<div class="dados">
							<label for="senha">*Senha:</label>
							<input type="password" name="senha" id="senha" required>
							<!-- <input type="password" name="senha" id="senha" 
								title="A senha deve ter no mínimo 4 carateres"
								placeholder="Mínimo 4 carateres"
								pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
								required
							> -->
						</div>
					</fieldset>

					<fieldset class="bloco">
						<div class="dados">
							<label for="cpf">*CPF:</label>
							<input type="text" id="cpf" name="cpf" maxlength="11"
								title="Somente números, sem ponto ou traço" 
								pattern="[0-9]{11}" required>
						</div>
					</fieldset>

					<fieldset class="bloco">
						<div class="dados dadosCheck">
							<p>*</p><input type="checkbox" name="autoriza" value="1" required>
							<label>Autorizo o Senac-RS me contatar e realizar o envio de informações relacionadas aos seus produtos/serviços e eventos</label>
						</div>
					</fieldset>

					<button type="submit" class="botao" name="submit">Cadastrar</button>

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