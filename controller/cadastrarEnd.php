<?php
    session_start();

    include_once("../model/Cliente.php");
    include_once("../model/ClienteDao.php");
    extract($_REQUEST, EXTR_OVERWRITE);

    if($rua != "") {
        $endereco = new Endereco();
        $endereco->setRua($rua);
        $endereco->setCidade($cidade);
        $endereco->setUF($uf);
        $endereco->setPais($pais);
        $endereco->setBairro($bairro);
        $endereco->setcep($cep);

        $enderecoDao = new EnderecoDao();
        $enderecoDao -> add($endereco);
        

    //Lembrete: Direcionar pagina depois.
        echo " <script>
                    alert('Dados Cadastrados');

                    window.location.href = '../index.php';
                </script>";
    } else {
        echo 'erro';
    }
?>