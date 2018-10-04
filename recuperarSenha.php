<?php
     $email = $_POST['email'];

$conexao = mysqli_connect("localhost", "id6910962_thiago", "senha","id6910962_sacolon");

function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
$ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
$mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
$nu = "0123456789"; // $nu contem os números
$si = "!@#$%¨&*()_+="; // $si contem os símbolos

if ($maiusculas){
  // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
  $senha .= str_shuffle($ma);
}

if ($minusculas){
  // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
  $senha .= str_shuffle($mi);
}

if ($numeros){
  // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
  $senha .= str_shuffle($nu);
}

if ($simbolos){
  // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
  $senha .= str_shuffle($si);
}

// retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
return substr(str_shuffle($senha),0,$tamanho);
}

    if($conexao){
      $sql = "SELECT * FROM tbcliente WHERE emailcliente='$email';";
    $resultado = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($resultado);
      if($row > 0){
            $novaSenha = gerar_senha(10, true, true, true, false);
              $novaSenhaSalva = md5($novaSenha);
                $assunto = 'Recuperação de senha SacolOn';
                $mensagem = "Olá. Sua senha é: ".$novaSenha;
                $emailremetente = 'thiagoferreira000000001@gmail.com';

             $envio = mail($email, $assunto, $mensagem, $emailremetente);
             if($envio){
              $sql = "UPDATE tbcliente SET senhacliente = '$novaSenhaSalva' WHERE emailcliente = '$email' ;";
              $resultado = mysqli_query($conexao, $sql);
              echo "<script>alert('Email enviado!');</script>";
              echo "<script>location.href='login.php';</script>";
             }
      }else{
          echo "<script>alert('Email não cadastrado!');</script>";
      }
    }

 ?>
