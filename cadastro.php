<?php

	$idCliente = 0;
	$idendereco = 0;
	$nome = "";
	$sobrenome = "";
	$rua = "";
	$numero = "";
	$complemento = "";
	$bairro = "";
	$cidade = "";
	$telefone = "";
	$documento="";
	$cep = "";
	$email = "";
	$senha = "";

	if(isset($_GET["idCliente"])){

		$idCliente = $_GET["idCliente"];

		$conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");
		if($conexao) {

			$sql = "SELECT * FROM tbcliente WHERE cdcliente = '$idCliente';";

			$resultado = mysqli_query($conexao, $sql);
			mysqli_close($conexao);

			foreach($resultado as $linha) {
				$idCliente = $linha['cdcliente'];
				$nome = $linha['nmcliente'];
				$sobrenome = $linha['sobrenomecliente'];
				$telefone = $linha['foneclinete'];
				$documento = $linha['doccliente'];
				$email = $linha['emailcliente'];
				$senha=md5($linha['senhacliente']);
			}

			$sql = "SELECT rua, numero, cidade, cep, complemento, bairro FROM tbendereco
			WHERE cdendereco='$idendereco'";

			$resultado = mysqli_query($conexao, $sql);
			mysqli_close($conexao);

			foreach($resultado as $linha) {
				$rua = $linha['rua'];
				$bairro = $linha['bairro'];
				$cidade = $linha['cidade'];
				$numero = $linha['numero'];
				$complemento = $linha['complemento'];
				$cep=$linha['cep'];
			}



		}else{
			echo 'Falha ao conectar: '.mysqli_error();
		}
	}

?>

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
		<div id="formCadastro">
			<h1 class="tituloTexto" id="tituloCadastro">Cadastro de Cliente</h1>
		  <div class="row">
		    <form class="col s12" enctype="multipart/form-data" action="cadastrarCliente.php" method="post">
		      <div class="row">
		      	<input type="hidden" name="idCliente" id="idCliente" value="<?php echo $idCliente ?>" >
		      	<input type="hidden" name="idendereco" id="idendereco" value="<?php echo $idendereco ?>" >

		        <div class="input-field col s6">
		          <input placeholder="Nome" id="nome" name="nome" type="text" class="validate" required onkeyup="validar(this,'text');" value="<?php echo $nome ?>">
		          <label for="nome"></label>
		        </div>
		        <div class="input-field col s6">
		          <input id="sobrenome" type="text" name="sobrenome" class="validate" placeholder="Sobrenome" required onkeyup="validar(this,'text');" value="<?php echo $sobrenome ?>">
		          <label for="sobrenome"></label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input id="rua" type="text" class="validate" name="rua" placeholder="Rua" required value="<?php echo $rua ?>">
		          <label for="rua"></label>
		        </div>
                    <div class="input-field col s1">
		          <input id="numero" class="form-control input-sm" name="numero" onkeyup="somenteNumeros(this);" maxlength="5" type="text"  ng-model="numero.valor" placeholder="Número"´required value="<?php echo $numero ?>">
		          <label for="numero"></label>
		        </div>
		        <div class="input-field col s1">
		          <input id="complemento" type="text" name="complemento" class="validate" placeholder="complemento" maxlength="4" value="<?php echo $complemento ?>">
		          <label for="complemento"></label>
		        </div>
		        <div class="input-field col s3">
		          <input id="bairro" type="text" name="bairro" class="validate" placeholder="Bairro" required onkeyup="validar(this,'text');" value="<?php echo $bairro ?>">
		          <label for="bairro"></label>
		        </div>
		        <div class="input-field col s3">
		          <input id="cidade" type="text" class="validate" name="cidade" placeholder="cidade" required onkeyup="validar(this,'text');" value="<?php echo $cidade ?>">
		          <label for="cidade"></label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input id="telefone" type="text" class="validate" name="telefone" placeholder="Telefone" required name="telefone" maxlength="15" value="<?php echo $telefone ?>">
		          <label for="telefone"></label>
		        </div>
		        <div class="input-field col s4">
		         <input id="documento" type='text' name='documento'name="documento" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' maxlength="18" required placeholder="CPF/CNPJ" value="<?php echo $documento ?>">
		        <label for="documento"></label>
		        </div>
		        <div class="input-field col s4">
		          <input id="cep" type="text" class="validate" name="cep" placeholder="CEP" required value="<?php echo $cep ?>">
		          <label for="cep"></label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input id="email" type="email" class="validate" name="email" placeholder="Email" required value="<?php echo $email ?>">
		          <label for="email"></label>
		        </div>
		        <div class="input-field col s4">
		          <input id="senha" type="password" name="senha" class="validate" placeholder="Senha" required value="<?php echo $senha ?>">
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
