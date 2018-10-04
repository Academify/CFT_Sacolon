<!DOCTYPE html>
<html>
	<head>
		<title>SacolOn - Login</title>
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
		<link rel="stylesheet" type="text/css" href="css/estiloCategorias.css">
		<link rel="stylesheet" type="text/css" href="css/estiloHome.css">
		<link rel="stylesheet" type="text/css" href="css/estiloTexto.css">
		<link rel="stylesheet" type="text/css" href="css/estiloTelaLogin.css">
		<link rel="icon" href="css/img/logo.ico" type="image/x-icon" />

		<meta charset="utf-8">
	</head>
<body class="bg">

	<header id="topoPagina">

		<div id="cabecalho">

			<div id="posicaoLogo">
				<img src="css/img/logo.png" id="tamanhoLogo">
			</div>

			</div>

	</header>

	<div id="corpo">
		<div id="campoLogin">
				<form action="loginAdm.php" method="post" name="formLogin">
				<div class="row">
				        	<div class="input-field col s12">
				          		<input id="login" type="text" class="validate" placeholder="Login" name="login" required>
				          		<label for="login" ></label>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="input-field col s12">
				          		<input id="senha" type="password" class="validate" placeholder="Senha" name="senha" required>
				          		<label for="senha"></label>
				        	</div>
				        </div>
				      	<button class="btn waves-effect waves-light"  id="botaoEntrar" type="submit" name="enviar">Entrar</button>

				</form>
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
