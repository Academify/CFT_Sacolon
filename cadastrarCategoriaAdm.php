 <?php

	$idCategoria = $_POST["idCategoria"];
	$nome = $_POST["nome"];

     $conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

	if($conexao) {
		$v = true;
		$sql = "SELECT * FROM tbcategoria";
		$resultado = mysqli_query($conexao, $sql);

		foreach($resultado as $linha){
			if($linha['nmcategoria'] == $nome){
				$v = false;
				echo "<script>alert('Essa categoria já existe. Tente novamente');</script>";
			}
		}

		if($v == true){
			if($idCategoria == 0){
				$sql = "INSERT INTO tbcategoria(nmcategoria)
				               VALUES('$nome');";
			}else{
				$sql = "UPDATE tbcategoria SET nmcategoria='$nome'
	   			               WHERE cdcategoria = '$idCategoria';";
			}
			$resultado = mysqli_query($conexao, $sql);

			mysqli_close($conexao);


			if($resultado == 1){
				echo "<script>alert('Salvo com sucesso!'); location.href='principalAdm.php';</script>";

			} else{
				echo "<script>alert('Erro.'); location.href='categoriaFormAdm.php';</script>";
			}
		}
	} else{
			echo 'Falha ao conectar: '.mysqli_error();

	}

?>
