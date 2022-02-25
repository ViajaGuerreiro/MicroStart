<?php
session_start();
include_once("../model/conexao.php");

if(empty($_POST['email']) || empty($_POST['senha'])) {
    
    //Lembrete: Direcionar pagina depois.
    header("Location: ../view/index.php");
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select * from cliente where email = '{$email}'";

$resultado = mysqli_query($conexao, $query);

$row = mysqli_num_rows($resultado);

if($row == 1) {
    $linha = mysqli_fetch_assoc($resultado);

    if(password_verify($senha,$linha["senha"])) {

        $_SESSION['nome_cli'] = $linha['nome'];
        $_SESSION['id_cli'] = $linha['cod_cli'];
        
    //Lembrete: Direcionar pagina depois.
        header("Location: ../view/dadosUsu.php");
        exit();
    }else {
        $_SESSION['senha_incorreta'] = true;
    //Lembrete: Direcionar pagina depois.
        header("Location: ../view/login.php");
        exit();
    }
} 
else {
    $_SESSION['nao_autenticado'] = true;
    //Lembrete: Direcionar pagina depois.
    header("Location: ../view/login.php");
    exit();
}

?>