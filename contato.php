<!DOCTYPE html>
<html>
	<head>
		<title>SacolOn</title>
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
		<link rel="stylesheet" type="text/css" href="css/estiloHome.css">
		<link rel="stylesheet" type="text/css" href="css/estiloTexto.css">
		<link rel="stylesheet" type="text/css" href="css/estiloContato.css">
		<link rel="icon" href="css/img/logo.ico" type="image/x-icon" />

		<meta charset="utf-8">
	</head>
<body class="bg">

	<header id="topoPagina">

		<div id="cabecalho">

			<div id="posicaoLogo">
				<img src="css/img/logo.png" id="tamanhoLogo">
			</div>

			<div id="posicaoCesta">
				<input TYPE="image" SRC="css/img/minhaCesta.png"NAME="minhaCesta" id="tamanhoCesta" class="botaoCesta" onClick="window.location.href='confereLoginCesta.php'">
			</div>

		</div>

	<div id="menu">

  		<ul class="tabs tabs-transparent">
    		<li class="tab"><a class="fonteMenu" href="index.php">Home</a></li>
    		<li class="tab"><a class="fonteMenu" href="comoFunciona.php">Como Funciona</a></li>
    		<li class="tab"><a class="fonteMenu" href="produtos.php">Produtos</a></li>
   			<li class="tab"><a class="fonteMenu" href="kits.php">Kit's</a></li>
   			<li class="tab"><a class="fonteMenu" href="contato.php">Contato</a></li>
   			<li class="tab"><a class="fonteMenu" href="cadastro.php">Cadastre-se!</a></li>
  		</ul>

	</div>

	</header>

	<div id="corpo">
		<div class="campoContatoCompleto">
			<h1 class="tituloTexto" id="tituloContato">Contato</h1>
			<div class="campoContato">
				<form class="col s12" id="formularioContato" action="enviarEmail.php" method="post">
				        <div class="row">
				        	<div class="input-field col s12">
				          		<input id="nome" type="text" name="nome" class="validate" placeholder="Nome" required minlength="2">
				          		<label for="nome" ></label>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="input-field col s12">
				          		<input id="email" type="email" name="email" class="validate" placeholder="Email" required>
				          		<label for="email" ></label>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="input-field col s12">
				          		<input id="mensagem" type="text" name="mensagem" minlength="2" maxlength="100" class="validate" placeholder="Sua Mensagem" required>
				          		<label for="mensagem"></label>
				        	</div>
				        </div>
				      	<button class="btn waves-effect waves-light"  id="botaoContato" type="submit" name="action">Enviar</button>
				</form>
			</div>
			<img src="css/img/local.png" id="imgLocal">
			<h1 class="endereco" id="tituloEndereco">Venha nos fazer uma visita!</h1>
			<p class="endereco">Avenida Acesita, 220, Primavera, Timóteo</p>
			<p class="endereco">31 3847 3665</p>

		</div>
	</div>
	 <footer class="page-footer" id="rodape">
		<div class="container">
			<div class="row">
			  <div class="col l6 s12">
			    <h5 >SacolOn</h5>
			    <p class="text-lighten-4">Nosso slogan muito bonito e bem elaborado</p>
			  </div>
			  <div class="col l4 offset-l2 s12">
			    <h5> Páginas</h5>
			    <ul>
			      <li><a class="text-lighten-3" href="index.php">Home</a></li>
			      <li><a class="text-lighten-3" href="comoFunciona.php">Como Funciona</a></li>
			      <li><a class="text-lighten-3" href="produtos.php">Produtos</a></li>
			      <li><a class="text-lighten-3" href="kits.php">Kit's</a></li>
			      <li><a class="text-lighten-3" href="contato.php">Contato</a></li>
			      <li><a class="text-lighten-3" href="cadastro.php">Cadastre-se!</a></li>
			    </ul>
			  </div>
			</div>
			</div>
			<div class="footer-copyright">
			<div class="container">
			© 2018 SacolOn Ltda
			</div>
		</div>
    </footer>


</body>
</html>
