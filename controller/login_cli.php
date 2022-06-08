<?php
session_start();
extract($_REQUEST, EXTR_OVERWRITE);

if(isset($email) && !empty($email) && isset($senha) && !empty($senha)) {
    include_once("../model/Cliente.php");
    include_once("../model/ClienteDao.php");
    $cliente = new Cliente();

    $email = addslashes($email);
    $senha = addslashes($senha);

    $cliente->setEmail($email);

    $clienteDao = new ClienteDao();

    $clienteDao->login($cliente->getEmail(), $senha);
    
}
else {
    header('Location: ../View/loginCli.php');
}