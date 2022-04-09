<?php
    session_start();
    extract($_REQUEST, EXTR_OVERWRITE);

    if($nomeprod != "" && $preco != "" && $tamanho != "" && $quantidade != "" && $nomeMarca != "" && $tipo != "") {
        require_once("../model/Produto.php");
        require_once("../model/ProdutoDao.php");
        
        $produto = new Produto();
    
        //tabela produto
        $produto->setNomeProd($nomeprod);
        $produto->setPreco($preco);
        $produto->setTamanho($tamanho);
        $produto->setQuantidade($quantidade);

        //tabela marca
        $produto->setNomeMarca($nomeMarca);

        //tabela categoria
        $produto->setTipo($tipo);

        $produtoDao = new ProdutoDao();
        $produtoDao->create_prod($produto);

        echo " <script>
                    alert('Produto Cadastrado');

                    window.location.href = '../index.php';
                </script>";

    } else {
        echo " <script>
                    alert('Preencha todos os dados de cadastro');

                    window.location.href = '../view/cadastrarProduto.php';
                </script>";
    }
?>