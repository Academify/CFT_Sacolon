<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $emailAdm = "thiagofp707@gmail.com";
    $assunto = "Contato Sacolon";

    $conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

    $envio= mail($emailAdm, $assunto, $mensagem, $email);
    if ($envio) {
      echo "<script> alert('Email enviado com sucesso!');</script>";
      echo "<script>location.href='index.php';</script>";
    }
 ?>
