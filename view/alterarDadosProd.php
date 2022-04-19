<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar dados do Produto</title>
</head>
<body>
    <main>
<?php
    session_start();
    require_once '../model/Produto.php';
    require_once '../model/ProdutoDao.php';

    $produtoDao = new ProdutoDao();
    $linhas = $produtoDao->read_prod_id($_SESSION['id']);
    foreach($linhas as $linha) {

?>
        <h1>Alterar dados do Produto</h1>
        <div id="form-alterar">
            <form action="../controller/alterarDadosProd.php" method="post">
                <div id="form-alterar-produto">
                    <label for="cxProduto">Produto:</label>
                    <input required type="text" name="produto" id="cxProduto" value="<?= $linha['produto'] ?>">
                </div>

                <div id="form-alterar-precolote">
                    <label for="cxPrecoLote">Preço do Lote:</label>
                    <input required type="text" name="precolote" id="cxPrecoLote" value="<?= $linha['preco_lote'] ?>">
                </div>

                <div id="form-alterar-qil">
                    <label for="cxQil">Quantidade de itens no lote:</label>
                    <input required type="text" name="Qil" id="cxQil" value="<?= $linha['quantidade_itens_lote'] ?>">
                </div>

                <div id="form-alterar-tamanho">
                    <label for="cxTamanho">Tamanho do Item:</label>
                    <input required type="text" name="tamanho" id="cxTamanho" value="<?= $linha['tamanho_do_item'] ?>">
                </div>

                <div id="form-alterar-lotesDisponiveis">
                    <label for="cxLotesDisponiveis">Lotes Disponíveis:</label>
                    <input required type="text" name="lotesdisponiveis" id="cxLotesDisponiveis" value="<?= $linha['lotes_disponiveis'] ?>">
                </div>

                <div id="form-alterar-descricao ">
                    <label for="cxDescricao">Descrição</label>
                    <input required type="text" name="descricao" id="cxDescricao" value="<?= $linha['descricao'] ?>">
                </div>
            
                <button type="submit">Alterar dados</button>
            </form>
        </div>
    </main>
</body>
</html>
<?php
    }