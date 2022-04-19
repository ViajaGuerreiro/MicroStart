<?php
    session_start();
    include_once '../controller/verificaLogin.php'; 
?>

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

            <!--
                <div id="form-cadastro-categoria">
                    <label for="cxCategoria">Categoria:</label>
                    <select required type="text" name="categoria" id="cxCategoria">
                        <option disabled selected>Selecione...</option>
                        <option value="1">Moda</option>
                        <option value="2">Tecnologia</option>
                        <option value="3">Eletrodomésticos</option>
                        <option value="4">Construção</option>
                        <option value="5">Outros</option>
                    </select>
                </div>
            -->

                <div id="form-cadastro-marca">
                    <label for="cxMarca">Marca:</label>
                    <input required type="text" name="nomeMarca" id="cxMarca">
                </div>

                <!-- Lembrete: Arrumar um jeito de inserir imagens 
                <div id="form-cadastro-imagem">
                    <label for="cxImagem">Imagem</label>
                    <input required type="file" name="imagem" id="cxImagem">
                </div> -->

                <div id="form-cadastro-produto">
                    <label for="cxProduto">Produto:</label>
                    <input required type="text" name="nomeProduto" id="cxProduto">
                </div>

                <div id="form-cadastro-preco">
                    <label for="cxPreco">Preço do Lote: R$</label>
                    <input required type="number" name="preco" id="cxPreco">
                </div>

                <div id="form-cadastro-QIL">
                    <label for="cxQIL">Quantidade de itens do lote:</label>
                    <input required type="number" name="QIL" id="cxQIL">
                </div>

                <div id="form-cadastro-tamanho">
                    <label for="cxTamanho">Tamanho dos itens:</label>
                    <input required type="text" name="tamanho" id="cxTamanho">
                </div>

                <div id="form-cadastro-disponivel">
                    <label for="cxDisponivel">Lotes disponiveis:</label>
                    <input required type="number" name="disponivel" id="cxDisponivel">
                </div>

                <div id="form-cadastro-descricao">
                    <label for="cxDescricao">Descricao:</label>
                    <input placeholder="detalhe mais sobre o produto" type="text" name="descricao" id="cxDescricao">
                </div>

                <button type="submit">Cadastrar Produto</button>
            </form>
        </div>
    </main>
</body>
</html>
