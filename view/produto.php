<?php
    session_start();
    include_once '../model/ProdutoDao.php';
    $nomeProduto = $_GET['nome'];
    if($nomeProduto == null)
    {
        header('location: produtos.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nomeProduto ?></title>
</head>
<body>

<?php
    $produtoDao = new ProdutoDao();
    $linhas = $produtoDao->read_prod_nome($nomeProduto);
    foreach($linhas as $linha) {
?>
        <div id="detalhesProd">
            <form action="../controller/pagamento.php" method="post">
                <img src="" alt="">

                <input type="hidden" name="idProduto" value="<?= $linha['idProduto'] ?>">

                <input name="nomeProduto" readonly type="text" value="<?= $linha['Nome do Produto']?>" id="cxProduto">

                <label for="cxPreco">Preço do lote</label>
                R$<input name="precoLote" readonly type="number" value="<?= $linha['Preco']?>" id="cxPreco">

                <label for="cxQuantidade">Quantidade de itens por lote</label>
                <input readonly type="number" value="<?= $linha['Quantidade'] ?>" id="cxQuantidade">

                <label for="cxTamanhos">Tamanhos</label>
                <input readonly type="text" value="<?= $linha['Tamanho'] ?>" id="cxTamanhos">

                <label for="cxDisponivel">Disponiveis</label>
                <input readonly type="number" value="<?= $linha['Disponivel'] ?>" id="cxDisponivel">

                <label for="cxDisponivel">Escolha quantos lotes deseja</label>
                <input required max="<?= $linha['Disponivel'] ?>" type="number" name="quantidadeComprar" id="cxDisponivel">
                

                <label for="cxDescricao">Descrição</label>
                <input readonly type="text" value="<?= $linha['Descricao'] ?>" id="cxDescricao">

                <h1>Metodo de envio</h1>

                <label for="envio">Metodo de envio</label>
                <select required name="tipoEnvio" id="envio">
                    <option disabled selected>Selecione...</option>
                    <option value="1">Sedex</option>
                    <option value="2">Pac</option>
                    <option value="3">JetLog</option>
                    <option value="4">Retirada</option>
                </select>
<?php
                if(isset($_SESSION['id'])) {
?>

                    <button>Comprar</button>
<?php
                }else {
?>
                    <a href="loginCli.php">Faça login</a>
<?php
                }
?>
        </form>
    </div>
<?php
            }
?>
</body>
</html>
