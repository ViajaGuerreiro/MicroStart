<?php

if(!$_SESSION['id']) {

    //Lembrete: Direcionar pagina depois.
    header("Location: ../View/loginCli.php");
    exit();
}

?>