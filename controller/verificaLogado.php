<?php
    if($_SESSION['id']) {
        header("Location: ../View/produtos.php");
    exit();
    }