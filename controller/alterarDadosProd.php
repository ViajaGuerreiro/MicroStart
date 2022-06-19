<?php
    session_start();
    include_once("../model/Produto.php");
    include_once("../model/ProdutoDao.php");
    include_once 'verificaLogin.php';

    extract($_REQUEST, EXTR_OVERWRITE);

        $produto = new Produto();
        
        $produto->setIdProd($idProduto);
        $produto->setProduto($nomeProduto);
        $produto->setPrecoLote($precoLote);
        $produto->setQil($Qil);
        $produto->setTamanho($tamanho);
        $produto->setLotesDisponiveis($lotesDisponiveis);
        $produto->setDescricao($descricao);

        $produtoDao = new ProdutoDao();
        $produtoDao->update_prod($produto);
        //Lembrete: Direcionar pagina depois.
      /*  echo " <script>
                    alert('Dados do produto alterados com sucesso');

                    window.location.href = '../index.php';
                </script>";*/