<?php
    if(isset($_SESSION['id'])) {
        header("Location: ../View/produtos.php");
    exit();
    }
?>