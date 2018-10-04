
<?php
     session_start();
    $login = $_POST["login"];
	$senha = md5($_POST["senha"]);
    $conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

        if ($conexao) {
            $sql = "SELECT * FROM tbadministrador where loginadministrador = '$login' and senhaadministrador = '$senha'" ;
            $resultado= mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            $row = mysqli_num_rows($resultado);

            if( $row>0 ){
    
                $_SESSION['loginAdm']=$login;
                $_SESSION['senhaAdm']=$senha;
                echo "<script>location.href='principalAdm.php'</script>";
            }else {
                //unset ($_SESSION['login']);
                //unset ($_SESSION['senha']);

                echo "<script>
                    alert('Usuário ou senha inválidos');
                </script>";
                //echo "Usuário ou senha inválidos";
                echo "<script>location.href='loginAdmForm.php'</script>";
            }
        }else{
            echo 'Falha ao conectar: '.mysqli_error();
        }
?>