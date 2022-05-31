<?php
    session_start();
    extract($_REQUEST, EXTR_OVERWRITE);

    var_dump($img);
    var_dump($nomeProduto);

   /* if($nomeProduto != "" && $preco != "" && $QIL != "" && $tamanho != "" && $disponivel != "" && $nomeMarca != "" && $categoria != "" && $img != "") {
        require_once("../model/Produto.php");
        require_once("../model/ProdutoDao.php");

        if(isset($_FILES['img'])) {
            $extensao = strtolower(substr($_FILES['img']['name'], -4));
            $nome_img = md5(time() . $extensao);
            $diretorio = '../view/img/produtos/';
        
            $imagem = move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$nome_img);
        
        }
        
        $produto = new Produto();
    
        //tabela produto
        $produto->setProduto($nomeProduto);
        $produto->setPrecoLote($preco);
        $produto->setQil($QIL);
        $produto->setTamanho($tamanho);
        $produto->setLotesDisponiveis($disponivel);
        $produto->setDescricao($descricao);
        $produto->setImg($nome_img);

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
    }*/
?>