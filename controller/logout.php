<?php

session_start();
session_destroy();

//Lembrete: Direcionar pagina depois.
header("Location: ../view/index.php");
exit();

?>