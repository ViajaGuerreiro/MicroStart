<?php
    session_start();
    include_once '../controller/verificaLogin.php'; 
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

        foreach($linhas as $linha) {
?>
            <a href="">
                <div>
                    <img src="img/produtos/teste.jpg" alt="">
                    <input readonly type="text" value="<?= $linha['produto']?>" id="cxProduto">
                </div>
            </a>
<?php
        }
?>
    </main>
</body>
</html>