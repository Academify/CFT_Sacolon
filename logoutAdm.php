<?php
    session_start();
    unset ($_SESSION['loginAdm']);
    unset ($_SESSION['senhaAdm']);
?>
<script>location.href='loginAdmForm.php';</script>