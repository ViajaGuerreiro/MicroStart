<?php
    session_start();
    extract($_REQUEST, EXTR_OVERWRITE);

    if($nomeProduto != "" && $preco != "" && $QIL != "" && $tamanho != "" && $disponivel != "" && $nomeMarca != "" && $categoria != "") {
        require_once("../model/Produto.php");
        require_once("../model/ProdutoDao.php");
        
        $produto = new Produto();
    
        //tabela produto
        $produto->setProduto($nomeProduto);
        $produto->setPrecoLote($preco);
        $produto->setQil($QIL);
        $produto->setTamanho($tamanho);
        $produto->setLotesDisponiveis($disponivel);
        $produto->setDescricao($descricao);

        //tabela marca
        $produto->setNomeMarca($nomeMarca);

        //tabela categoria
        $produto->setCategoria($categoria);

        $produtoDao = new ProdutoDao();
        $produtoDao->create_prod($produto, $_SESSION['id']);

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