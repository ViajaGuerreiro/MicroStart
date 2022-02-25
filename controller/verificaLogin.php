<?php

if(!$_SESSION['id_cli']) {

    //Lembrete: Direcionar pagina depois.
    header("Location: ../view/login.php");
    exit();
}

?>