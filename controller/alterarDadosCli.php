<?php
    session_start();
    include_once("../model/Cliente.php");
    include_once("../model/ClienteDao.php");
    include_once 'verificaLogin.php';
    extract($_REQUEST, EXTR_OVERWRITE);

        $cliente = new Cliente();
        
        $cliente->setCod($_SESSION['id']);
        $cliente->setNome($nome);
        $cliente->setSobrenome($sobrenome);
        $cliente->setDataNasc($data_nasc);
        $cliente->setCnpj($cnpj);
        $cliente->setRamo($ramo);
        $cliente->setEmail($email);
        $cliente->setSenha($senha);

        $clienteDao = new ClienteDao();
        $clienteDao->update($cliente);
        //Lembrete: Direcionar pagina depois.
        echo " <script>
                    alert('Dados alterados com sucesso');

                    window.location.href = '../view/alterarDadosCli.php';
                </script>";