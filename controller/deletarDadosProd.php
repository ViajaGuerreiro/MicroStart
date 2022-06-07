<?php
session_start();
include_once("../model/Produto.php");
include_once("../model/ProdutoDao.php");
include_once 'verificaLogin.php';

extract($_REQUEST, EXTR_OVERWRITE);

$produto = new Produto();
$produto->setIdProd($idProduto);

$produtoDao = new ProdutoDao();
$produtoDao->delete_prod($produto);

//Lembrete: Direcionar pagina depois.
echo " <script>
            alert('Produto excluído com sucesso');

            window.location.href = '../view/alterarDadosCli.php';
        </script>";

?>