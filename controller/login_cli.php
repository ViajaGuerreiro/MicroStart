<?php
session_start();
include_once("../model/conexao.php");
extract($_REQUEST, EXTR_OVERWRITE);

if(empty($email) || empty($senha)) {
    
    //Lembrete: Direcionar pagina depois.
    header("Location: ../index.php");
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $email);
$senha = mysqli_real_escape_string($conexao, $senha);


$query = "select * from cliente where email = '{$email}'";

$resultado = mysqli_query($conexao, $query);

$row = mysqli_num_rows($resultado);

if($row == 1) {
    $linha = mysqli_fetch_assoc($resultado);

    if(password_verify($senha,$linha["senha"])) {

        $_SESSION['id_cli'] = $linha['cod_cli'];
        
        echo " <script>
                alert('Usuario Logado');

                window.location.href = '../index.php';
            </script>
    ";
    //Lembrete: Direcionar pagina depois.
        exit();
    }else {
        echo " <script>
                alert('Usuario ou senha incorretos');

                window.location.href = '../view/loginCli.php';
            </script>
    ";
    //Lembrete: Direcionar pagina depois.
        exit();
    }
} 
else {
    echo " <script>
                alert('Usuario não autenticado');

                window.location.href = '../view/loginCli.php';
            </script>
    ";
    //Lembrete: Direcionar pagina depois.
    exit();
}

?>