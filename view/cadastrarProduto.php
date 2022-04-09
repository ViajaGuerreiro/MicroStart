<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <main>
        <h1>Cadastrar Produto</h1>
        <div id="form-cadastro">
            <form action="../controller/cadProduto.php" method="post">
                <div id="form-cadastro-categoria">
                    <label for="cxCategoria">Categoria:</label>
                    <input required type="text" name="tipo" id="cxCategoria">
                </div>

                <div id="form-cadastro-marca">
                    <label for="cxMarca">Marca:</label>
                    <input required type="text" name="nomeMarca" id="cxMarca">
                </div>

                <div id="form-cadastro-nomeprod">
                    <label for="cxNome">Nome do Produto:</label>
                    <input required type="text" name="nomeprod" id="cxNome">
                </div>

                <div id="form-cadastro-preco">
                    <label for="cxPreco">Preço:</label>
                    <input required type="text" name="preco" id="cxPreco">
                </div>

                <div id="form-cadastro-tamanho">
                    <label for="cxTamanho">Tamanho:</label>
                    <input required type="text" name="tamanho" id="cxTamanho">
                </div>

                <div id="form-cadastro-quantidade">
                    <label for="cxQuantidade">Quantidade:</label>
                    <input required type="text" name="quantidade" id="cxQuantidade">
                </div>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>