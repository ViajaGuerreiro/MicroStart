<?php
    session_start();

    include_once("../model/Cliente.php");
    include_once("../model/ClienteDao.php");
    extract($_REQUEST, EXTR_OVERWRITE);

    if($telefone != "") {
        $clie_tel = new Tel_Clie();
        $clie_tel->setTelefone($telefone);
        $clie_tel->setDDD($ddd);

        $tel_clieDao = new Tel_ClieDao();
        $tel_clieDao -> adicionar($clie_tel);
        

    //Lembrete: Direcionar pagina depois.
        echo " <script>
                    alert('Dados Cadastrados');

                    window.location.href = '../view/cadastrarEnd.php';
                </script>";
    } else {
        echo 'erro';
    }
?>