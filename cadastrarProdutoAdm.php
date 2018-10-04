 <?php

	$idProduto = $_POST["idProduto"];
	$nome = $_POST["nome"];
	$marca =$_POST["marca"];
	$preco = $_POST["preco"];
	$qtdEstoque = $_POST["qtdEstoque"];
	$cdcategoria = 1;

     $conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

	if($conexao) {
		$v = true;
		$sql = "SELECT * FROM tbProduto";
		$resultado = mysqli_query($conexao, $sql);

		foreach($resultado as $linha){
			if($linha['nmproduto'] == $nome && $linha['marca'] == $marca){
				$v = false;
				echo "<script>alert('Já existe produto com esse nome e essa marca. Tente novamente');</script>";
			}
		}

		if($v == true){
			if($idProduto == 0){
				$sql = "INSERT INTO tbproduto(nmproduto, marca, preco, qtdestoque, cdcategoria)
				               VALUES('$nome','$marca','$preco','$qtdEstoque','$cdcategoria');";
			}else{
				$sql = "UPDATE tbproduto SET nmproduto='$nome', marca='$marca',
				               preco='$preco', qtdestoque='$qtdEstoque', cdcategoria='$cdcategoria'
	   			               WHERE cdProduto = '$idProduto'";
			}
			$resultado = mysqli_query($conexao, $sql);

			mysqli_close($conexao);

			if($resultado == 1){
				echo "<script>alert('Salvo com sucesso!'); location.href='principalAdm.php';</script>";

			} else{
				echo "<script>alert('Erro.'); location.href='produtoFormAdm.php';</script>";
			}
		}
	} else{
			echo 'Falha ao conectar: '.mysqli_error();

	}

?>
