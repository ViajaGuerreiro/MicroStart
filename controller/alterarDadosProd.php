<?php
    session_start();
    include_once("../model/Produto.php");
    include_once("../model/ProdutoDao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

        $produto = new Produto();
        
        $produto->setProduto($produto);
        $produto->setPrecoLote($precoLote);
        $produto->setQil($Qil);
        $produto->setTamanho($tamanho);
        $produto->setLotesDisponiveis($lotesDisponiveis);
        $produto->setDescricao($descricao);

        $produtoDao = new ProdutoDao();
        $produtoDao->update_prod($produto);
        //Lembrete: Direcionar pagina depois.
        echo " <script>
                    alert('Dados alterados com sucesso');

                    window.location.href = '../index.php';
                </script>";