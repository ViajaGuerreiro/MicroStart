<?php
    session_start();
    include_once("../model/conexao.php");
    include_once("../model/modelCli.php");
    extract($_REQUEST, EXTR_OVERWRITE);

    echo $nome . '<br>';
    echo $sobrenome . '<br>';
    echo $data_nasc . '<br>';
    echo $cnpj . '<br>';
    echo $email . '<br>';
    echo $senha . '<br>';

    if(isset($_SESSION['id_cli'])) {

        alterarDadosCli($conexao,$nome, $sobrenome, $data_nasc, $cnpj, $email, $senha);
        echo 'teste';
        //Lembrete: Direcionar pagina depois.
        /*echo " <script>
                    alert('Dados alterados com sucesso');

                    window.location.href = '../index.php';
                </script>";*/
    } else {
        echo " <script>
                    alert('Usuario precisa estar logado');

                    window.location.href = '../view/loginCli.php';
                </script>";
    }
?>