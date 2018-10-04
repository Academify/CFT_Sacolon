<?php
    session_start();

    if (isset($_SESSION['email'])) {
        
        header('Location: minhaCesta.php');
        
    }else{
    header('Location: loginForm.php');
}
?>