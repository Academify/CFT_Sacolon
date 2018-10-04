
<?php
	session_start();
	if (!isset($_SESSION["email"])){
		echo "<script>alert('É necessário realizar o login.');</script>";
		echo "<script>location.href='login.php';</script>";
	}
?>
<html>
	<head>
		<title>SacolOn</title>
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
		<link rel="stylesheet" type="text/css" href="css/estiloTexto.css">
		<link rel="stylesheet" type="text/css" href="css/estiloCesta.css">
		<link rel="stylesheet" type="text/css" href="css/estiloCliente.css">
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
				<input TYPE="image" SRC="css/img/minhaCesta.png" NAME="minhaCesta" id="tamanhoCesta" class="botaoCesta" onClick="window.location.href='confereLoginCesta.php'">
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

		<div class="campoMinhaCesta">
			<h1 class="tituloTexto" id="tituloCadastro">Minha Cesta</h1>
			<table id="tabelaProdutosCesta">
				  	<tr>
		    			<th id="tituloTabela">Produto</th>
		   				<th id="tituloTabela">Qtd</th>
		    			<th id="tituloTabela">Preço Unitário</th>
		    			<th id="tituloTabela">Preço Total</th>
		    			<th id="tituloTabela">Excluir</th>
		  			</tr>
		  			<tr>
		    			<td id="nomeItem"> Alface Americana</td>
		   				<td id="qtdItem">2</td>
		    			<td id="precoUniItem">R$0.99</td>
		    			<td id="precoTotalItem">R$1.98</td>
		    			<td><input TYPE="image" SRC="css/img/iconeExcluir.png" NAME="iconeExcluir" id="iconeExcluir" onClick="window.location.href='minhaCesta.php'" style=" margin-left: 35%"></td>
		  			</tr>
		  			<tr>
		    			<td id="nomeItem"> Alface Americana</td>
		   				<td id="qtdItem">2</td>
		    			<td id="precoUniItem">R$0.99</td>
		    			<td id="precoTotalItem">R$1.98</td>
		    			<td><input TYPE="image" SRC="css/img/iconeExcluir.png" NAME="iconeExcluir" id="iconeExcluir" onClick="window.location.href='minhaCesta.php'" style=" margin-left: 35%"></td>
		  			</tr>
		  			<tr>
		    			<td id="nomeItem"> Alface Americana</td>
		   				<td id="qtdItem">2</td>
		    			<td id="precoUniItem">R$0.99</td>
		    			<td id="precoTotalItem">R$1.98</td>
		    			<td><input TYPE="image" SRC="css/img/iconeExcluir.png" NAME="iconeExcluir" id="iconeExcluir" onClick="window.location.href='minhaCesta.php'" style=" margin-left: 35%"></td>
		  			</tr>
		  			<tr>
		    			<td id="nomeItem"> Alface Americana</td>
		   				<td id="qtdItem">2</td>
		    			<td id="precoUniItem">R$0.99</td>
		    			<td id="precoTotalItem">R$1.98</td>
		    			<td><input TYPE="image" SRC="css/img/iconeExcluir.png" NAME="iconeExcluir" id="iconeExcluir" onClick="window.location.href='minhaCesta.php'" style=" margin-left: 35%"></td>
		  			</tr>
		  			<tr>
		    			<td id="nomeItem"> Alface Americana</td>
		   				<td id="qtdItem">2</td>
		    			<td id="precoUniItem">R$0.99</td>
		    			<td id="precoTotalItem">R$1.98</td>
		    			<td><input TYPE="image" SRC="css/img/iconeExcluir.png" NAME="iconeExcluir" id="iconeExcluir" onClick="window.location.href='minhaCesta.php'" style=" margin-left: 35%"></td>
		  			</tr>

			</table>
			<button class="btn waves-effect waves-light"  id="botaoAddProduto" name="action">Adicionar Produto</button>
			<button class="btn waves-effect waves-light"  id="botaoLimparCesta" name="action">Limpar Cesta</button>
			<button class="btn waves-effect waves-light"  id="botaoFinalizarCompra" name="action">Finalizar Compra</button>


		</div>
		<div id="topoCampoCliente">
			<h1 class="textoTopoCampoCliente">Olá Cliente!</h1>

		</div>
		<div id="campoCliente">
			<img src="css/img/fotoPerfil.jpg" id="imgCliente">
			<div id="nomeCliente">Fulana de Tal da Silva</div>
			<ul class="collection" id="listaKits">
		        <li class="collection-item" id="kitLista"><div>Kit Semanal<a href="meukit.php" class="secondary-content"><i class="material-icons" id="txtKit">Info</i></a><br><a href="#!" class="secondary-content"><i class="material-icons" id="txtKit">Por Na Cesta</i></a></div></li>
		        <li class="collection-item" id="kitLista"><div>Kit Vinagrete<a href="meuKit.php" class="secondary-content"><i class="material-icons" id="txtKit">Info</i></a><br><a href="#!" class="secondary-content"><i class="material-icons" id="txtKit">Por Na Cesta</i></a></div></li>
		        <li class="collection-item" id="kitLista"><div>Kit Maionese<a href="meuKit.php" class="secondary-content"><i class="material-icons" id="txtKit">Info</i></a><br><a href="#!" class="secondary-content"><i class="material-icons" id="txtKit">por na cesta</i></a></div></li>
		        <li class="collection-item" id="kitLista"><div>Kit Salada de Frutas<a href="meuKit.php" class="secondary-content"><i class="material-icons" id="txtKit">Info</i></a><br><a href="#!" class="secondary-content"><i class="material-icons" id="txtKit">por na cesta</i></a></div></li>
		    </ul>
		        <button class="btn waves-effect waves-light"  id="botaoAlterarDados" onClick="window.location.href='alterarDados.php' " name="action">Meu Perfil</button>
		        <button class="btn waves-effect waves-light" id="botaoNovoKit" onClick="window.location.href='meuKit.php' " name="action">Novo Kit</button>
				<button class="btn waves-effect waves-light" id="botaoNovoKit" onClick="window.location.href='logout.php' " name="action">Sair</button>
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
