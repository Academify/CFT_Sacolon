<!DOCTYPE html>
<html>
	<head>
		<title>SacolOn</title>
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
		<link rel="stylesheet" type="text/css" href="css/estiloCategorias.css">
		<link rel="stylesheet" type="text/css" href="css/estiloLogin.css">
		<link rel="stylesheet" type="text/css" href="css/estiloHome.css">
		<link rel="stylesheet" type="text/css" href="css/estiloTexto.css">
		<link rel="stylesheet" type="text/css" href="css/estiloProduto.css">
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

			<div id="divLogin">
				<div id="topoLogin">
					<img src="css/img/cadeado.png" id="imgTopoLogin">
					<h1 class="textoTopoLogin">Login</h1>
				</div>

				<div class="login">
				  	<div class="row">
					    <form class="col s12">
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="email" type="email" class="validate" placeholder="Email" required>
					          <label for="email" ></label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="password" type="password" class="validate" placeholder="Senha" required>
					          <label for="password"></label>
					        </div>
					      </div>
					      	 <button class="btn waves-effect waves-light"  id="botaoEntrar" type="submit" name="action">Entrar
							 	 </button>
					    </form>
					</div>
					<div class="campoCadastro">
						<a href="cadastro.php" id="linkCadastro">Cadastre-se!</a><br/>
						<a href="recuperarSenha.php" id="linkCadastro">Esqueceu sua senha?</a>
					</div>
				</div>
			</div>

		<div id="divCategoria">
			<div id="topoCategoria">
				<h1 class="textoTopoCat">Categorias</h1>
			</div>

			<div class="Categorias">
				<nav>
					<ul>
						<li><a class="fonteCategoria" href="kits.php">Kit's</a></li>
						<li><a class="fonteCategoria" href="produtos.php">Verduras</a></li>
						<li><a class="fonteCategoria" href="produtos.php">Frutas</a></li>
						<li><a class="fonteCategoria" href="produtos.php">Legumes</a></li>
						<li><a class="fonteCategoria" href="produtos.php">Granjeiros</a></li>
						<li><a class="fonteCategoria" href="produtos.php">Conservas</a></li>
						<li><a class="fonteCategoria" href="produtos.php">Doces</a></li>
						<li><a class="fonteCategoria" href="produtos.php">Condimentos</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div id="campoMeio">
			<div class="campoProdutos">

			<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>
			<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>
			<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>

				<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>
			<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>
					<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>
			<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>
			<div class="produtoIndividual">
				<div id="imagemProduto">
				<img src="css/img/alfaceAmericana.png" id="imgProduto">
			</div>
				<div id="infoProduto">
					<h1 id="nomeProduto">NomeProduto</h1>
					<h1 id="precoProduto">R$ 1.00/kg</h1>
					<form>
					<input type="number" name="qtd" id="qtdProduto" required value="1" min="1" max="999">
					<button class="btn waves-effect waves-light"  id="botaoAddCesta" type="submit" name="action">Pôr Na Cesta</button>
				</form>
				</div>
			</div>

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
