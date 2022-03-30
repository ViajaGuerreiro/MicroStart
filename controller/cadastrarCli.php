<?php

    include_once("../model/conexao.php");
    include_once("../model/modelCli.php");
    extract($_REQUEST, EXTR_OVERWRITE);

    if($nome != "") {
    cadastrarCli($conexao,$nome, $sobrenome, $data_nasc, $cnpj, $email, $senha);

    //Lembrete: Direcionar pagina depois.
    echo " <script>
                alert('Usuario Cadastrado');

                window.location.href = '../view/loginCli.php';
            </script>
    ";
    } else {
        echo 'erro';
    }
?>