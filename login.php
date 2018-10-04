<?php
    $email = $_POST["email"];
	$senha = md5($_POST["senha"]);
    $conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

        if ($conexao) {
            $sql = "SELECT *  FROM tbcliente where emailcliente = '$email' and senhacliente = '$senha'" ;
            $resultado= mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            $row = mysqli_num_rows($resultado);

            if( $row > 0 ){
                session_start();
                $_SESSION['email']=$email;
                $_SESSION['senha']=$senha;

                echo "<script>location.href='minhaCesta.php';</script>";
            }else {
                //unset ($_SESSION['login']);
                //unset ($_SESSION['senha']);

                echo "<script>
                    alert('Usuário ou senha inválidos');
                </script>";
                //echo "Usuário ou senha inválidos";
                echo "<script>location.href='loginForm.php';</script>";
            }
        }else{
            echo 'Falha ao conectar: '.mysqli_error();
        }
    ?>
    </body>
</html>
