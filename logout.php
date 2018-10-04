<?php
    session_start();
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
?>
<script>location.href='loginForm.php';</script>