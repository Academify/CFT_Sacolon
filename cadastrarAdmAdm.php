 <?php

	$idAdm = $_POST["idAdm"];
	$nome = $_POST["nome"];
	$email =$_POST["email"];
	$login = $_POST["login"];
	$senha = md5($_POST["senha"]);

     $conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

	if($conexao) {
		$v = true;
		$sql = "SELECT * FROM tbadministrador";
		$resultado = mysqli_query($conexao, $sql);

		foreach($resultado as $linha){
			if($linha['emailadministrador'] == $email || $linha['loginadministrador'] == $login){
				$v = false;
				echo "<script>alert('Email ou loign já cadastrados. Tente novamente');</script>";
			}
		}

		if($v == true){
			if($idProduto == 0){
				$sql = "INSERT INTO tbadministrador(nmadministrador, emailadministrador, loginadministrador, senhaadministrador)
				               VALUES('$nome','$email','$login','$senha');";
			}else{
				$sql = "UPDATE tbadministrador SET nmadministrador='$nome', emailadministrador='$email',
				               loginadministrador='$login', senhaadministrador='$senha'
	   			               WHERE cdadministrador = '$idAdm'";
			}
			$resultado = mysqli_query($conexao, $sql);

			mysqli_close($conexao);

			if($resultado == 1){
				echo "<script>alert('Salvo com sucesso!'); location.href='principalAdm.php';</script>";

			} else{
				echo "<script>alert('Erro.'); location.href='admFormAdm.php';</script>";
			}
		}
	} else{
			echo 'Falha ao conectar: '.mysqli_error();

	}

?>
