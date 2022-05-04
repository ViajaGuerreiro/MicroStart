<?php
    session_start();

    include_once '../model/ProdutoDao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <main>
        <nav>
            <a href="">Moda</a>
            <a href="">Tecnologia</a>
            <a href="">Eletrodomésticos</a>
            <a href="">Construção</a>
            <a href="">Outros</a>
            <a href="../index.php">home</a>
        </nav>
        <h1>Produtos</h1>

<?php
        $produtoDao = new ProdutoDao();
        $linhas = $produtoDao->read_prod();

        if(!$linhas == null) {
            foreach($linhas as $linha) {
?>
                    <div id="produtos">
                        <a href="produto.php?nome=<?= $linha['produto'] ?>">
                            <img src="img/produtos/teste.jpg" alt="">
                            <input readonly type="text" value="<?= $linha['produto']?>" id="cxProduto">
                            <input readonly type="number" value="<?= $linha['preco_lote']?>" id="cxPreco">
                            <button>Ver mais</button>
                        </a>
                    </div>
<?php
        }
    } else {
        echo " <script>
                            alert('Não há nenhum produto disponivel');

                            window.location.href = '../index.php';
                        </script>";
    }
?>
    </main>
</body>
</html>