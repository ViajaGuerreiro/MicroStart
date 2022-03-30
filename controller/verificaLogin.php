<?php

if(!$_SESSION['id_cli']) {

    //Lembrete: Direcionar pagina depois.
    header("Location: ../View/loginCli.php");
    exit();
}

?>