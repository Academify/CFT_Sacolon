<?php

	$idCategoria = 0;
	$nome = "";

	if(isset($_GET["idCategoria"])){

		$idCategoria = $_GET["idCategoria"];

		$conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");
		if($conexao) {

			$sql = "SELECT * FROM tbcategoria WHERE cdcategoria = '$idCategoria';";

			$resultado = mysqli_query($conexao, $sql);
			mysqli_close($conexao);

			foreach($resultado as $linha) {
				$idCategoria = $linha['cdcategoria'];
				$nome = $linha['nmcategoria'];

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


		<meta charset="utf-8">
	</head>
<body class="bg">

	<header id="topoPagina">

		<div id="cabecalho">

			<div id="posicaoLogo">
				<img src="css/img/logo.png" id="tamanhoLogo">
			</div>

		</div>

	<div id="menu">

  		<ul class="tabs tabs-transparent">
    		<li class="tab"><a class="fonteMenu" href="principalAdm.php">Home</a></li>
    		<li class="tab"><a class="fonteMenu" href="produtoFormAdm.php">Produtos</a></li>
   			<li class="tab"><a class="fonteMenu" href="categoriaFormAdm.php">Categorias</a></li>
 			<li class="tab"><a class="fonteMenu" href="kitsFormAdm.php">Kit's</a></li>
   			<li class="tab"><a class="fonteMenu" href="admFormAdm.php">Administradores</a></li>
	   		<li class="tab"><a class="fonteMenu" href="logoutAdm.php">Sair</a></li>
  		</ul>

	</div>

	</header>

	<div id="corpo">
		<div id="formCadastro">
			<h1 class="tituloTexto" id="tituloCadastro">Cadastro de Categoria</h1>
		    <form class="col s12" enctype="multipart/form-data" action="cadastrarCategoriaAdm.php" method="post">
		      <div class="row">
		      	<input type="hidden" name="idCategoria" id="idCategoria" value="<?php echo $idCategoria ?>" >

		        <div class="input-field col s9">
		          <input placeholder="Nome" id="nome" name="nome" type="text" class="validate" required value="<?php echo $nome ?>">
		          <label for="nome"></label>
		        </div>
		        	<button style="width: 20%; margin: 2%; height: 25%" class="btn waves-effect waves-light"  id="botaoCadastro" type="submit" name="action">Cadastrar</button>
		        </div>
		    </form>
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
