<?php

session_start();
session_destroy();

//Lembrete: Direcionar pagina depois.
header("Location: ../index.php");
exit();

?>