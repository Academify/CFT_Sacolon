 <?php

	$idCliente = $_POST["idCliente"];
	$codendereco = $_POST["idendereco"];
	$nome = $_POST["nome"];
	$sobrenome =$_POST["sobrenome"];
	$rua = $_POST["rua"];
	$numero = $_POST["numero"];
	$complemento = $_POST["complemento"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$telefone = $_POST["telefone"];
	$documento = $_POST["documento"];
	$cep = $_POST["cep"];
	$email = $_POST["email"];
	$senha = md5($_POST["senha"]);
	if (strlen($documento)>14) {
		$tipo="J";
	} else{
		$tipo="F";
	}

    $conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

	if($conexao) {
		$v = true;
		$sql = "SELECT * FROM tbcliente";
		$resultado = mysqli_query($conexao, $sql);

		foreach($resultado as $linha){
			if($linha['emailcliente'] == $email || $linha['doccliente'] == $documento){
				$v = false;
				echo "<script>alert('O documento ou o e-mail já existem. Tente novamente');</script>";
			}
		}

		if($v == true){
			if($idCliente == 0){
				$sql = "INSERT INTO tbcliente(nmcliente, sobrenomecliente, fonecliente, doccliente, emailcliente, senhacliente, tipocliente)
				               VALUES('$nome','$sobrenome','$telefone','$documento','$email', '$senha', '$tipo');";
			}else{
				$sql = "UPDATE tbcliente SET nmcliente='$nome', sobrenomecliente='$sobrenome',
				               fonecliente='$telefone', doccliente='$documento', emailcliente='$email', senhacliente='$senha'
	   			               WHERE cdcliente = '$idcliente'";
			}
			$resultado = mysqli_query($conexao, $sql);

			mysqli_close($conexao);


			// aqui encerra o cliente e comeca o endereco

			if($resultado == 1){
				echo "<script>alert('Salvo com sucesso!'); location.href='index.php';</script>";
				session_start();
                $_SESSION['email']=$email;
                $_SESSION['senha']=$senha;

			} else{
				echo "<script>alert('Erro.'); location.href='cadastro.php';</script>";
			}
		}
	} else{
			echo 'Falha ao conectar: '.mysqli_error();

	}

?>
