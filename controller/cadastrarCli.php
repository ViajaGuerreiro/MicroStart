<?php
    session_start();

    include_once("../model/conexao.php");
    include_once("../model/modelCli.php");
    extract($_REQUEST, EXTR_OVERWRITE);

    cadastrarCli($conexao,$nome, $sobrenome, $data_nasc, $cnpj, $email, $senha);

    //Lembrete: Direcionar pagina depois.
    header("location: ../view/login.php");
    $_SESSION['sucessoCad'] = true;
?>