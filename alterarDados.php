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
		<link rel="stylesheet" type="text/css" href="css/estiloCadastro.css">
		<link rel="stylesheet" type="text/css" href="css/estiloKit.css">
		<link rel="icon" href="css/img/logo.ico" type="image/x-icon" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="jquery.mask.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/cadastro.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>


		<script type="text/javascript">
			$(document).ready(function(){
				$('#telefone').mask('(00) 00000-0000');
				})
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#cep').mask('00.000-000');
				})
		</script>


		<meta charset="utf-8">
	</head>
<body class="bg">

	<header id="topoPagina">

		<div id="cabecalho">

			<div id="posicaoLogo">
				<img src="css/img/logo.png" id="tamanhoLogo">
			</div>

			<div id="posicaoCesta">
				<input TYPE="image" SRC="css/img/minhaCesta.png"NAME="minhaCesta" id="tamanhoCesta" class="botaoCesta" onClick="window.location.href='minhaCesta.php'">
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
		<div id="formCadastro">
			<h1 class="tituloTexto" id="tituloCadastro">Alteração de dados</h1>
		  <div class="row">
		    <form class="col s12">
		      <div class="row">
		      	<div class="input-field col s1">
		      		<img src="css/img/fotoPerfil.jpg" id="fotoPerfil">
		        </div>
		        <div class="input-field col s5">
		          <input placeholder="Nome" id="nome" type="text" class="validate" required onkeyup="validar(this,'text');">
		          <label for="nome"></label>
		        </div>
		        <div class="input-field col s6">
		          <input id="sobrenome" type="text" class="validate" placeholder="Sobrenome" required onkeyup="validar(this,'text');">
		          <label for="sobrenome"></label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input id="rua" type="text" class="validate" placeholder="Rua" required>
		          <label for="rua"></label>
		        </div>
		        <div class="input-field col s1">
		          <!--  <input id="num" type="text" class="validate" placeholder="Número" required>-->
		          <input id="num" class="form-control input-sm" onkeyup="somenteNumeros(this);" maxlength="5" type="text"  ng-model="numero.valor" placeholder="Número"´required>
		          <label for="num"></label>
		        </div>
		        <div class="input-field col s1">
		          <input id="complemento" type="text" class="validate" placeholder="complemento" maxlength="4">
		          <label for="complemento"></label>
		        </div>
		        <div class="input-field col s3">
		          <input id="bairro" type="text" class="validate" placeholder="Bairro" required onkeyup="validar(this,'text');">
		          <label for="bairro"></label>
		        </div>
		        <div class="input-field col s3">
		          <input id="cidade" type="text" class="validate" placeholder="cidade" required onkeyup="validar(this,'text');">
		          <label for="cidade"></label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input id="telefone" type="text" class="validate" placeholder="Telefone" required name="telefone" maxlength="15">
		          <label for="telefone"></label>
		        </div>
		        <div class="input-field col s4">
		         <!-- <input id="doc" type="text" class="validate" placeholder="Cpf/Cnpj" pattern="/(^\d{3}\.\d{3}\.\d{3}\-\d{2}$)|(^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$)/" required > -->

		         <input id="doc" type='text' name='cpfcnpj' onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' maxlength="18" required placeholder="CPF/CNPJ">
		        <label for="doc"></label>
		        </div>
		        <div class="input-field col s4">
		          <input id="cep" type="text" class="validate" placeholder="CEP" required>
		          <label for="cep"></label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input id="email" type="email" class="validate" placeholder="Email" required>
		          <label for="email"></label>
		        </div>
		        <div class="input-field col s4">
		          <input id="senha" type="password" class="validate" placeholder="Senha" required>
		          <label for="senha"></label>
		        </div>
		        <button class="btn waves-effect waves-light"  id="botaoCadastro" type="submit" name="action">Cadastrar</button>
		      </div>
		    </form>
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
