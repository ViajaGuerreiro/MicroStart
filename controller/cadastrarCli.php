<?php
    session_start();

    include_once("../model/Cliente.php");
    include_once("../model/ClienteDao.php");
    extract($_REQUEST, EXTR_OVERWRITE);

    if($nome != "") {
        $cliente = new Cliente();
        $cliente->setNome($nome);
        $cliente->setSobrenome($sobrenome);
        $cliente->setDataNasc($data_nasc);
        $cliente->setCnpj($cnpj);
        $cliente->setEmail($email);
        $cliente->setSenha($senha);

        $clienteDao = new ClienteDao();
        $clienteDao->create($cliente);
        $clienteDao->login($cliente->getEmail(), $senha);
        

    //Lembrete: Direcionar pagina depois.
        echo " <script>
                    alert('Usuario Cadastrado');

                    window.location.href = '../view/loginCli.php';
                </script>";
    } else {
        echo 'erro';
    }
?>