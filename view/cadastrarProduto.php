<?php
session_start();
include_once 'navSair.php';
include_once '../controller/verificaLogin.php';


$nome_img = null;
//imagem cadastra na pasta img/produtos porem não salva no banco de dados o caminho, e cada vez que recarrega a pagina a variavel $_FILES['img'] faz gerar uma cópia do arquivo anterior upado (LEMBRETE:ARRUMAR)
if(!$_FILES['img'] == null) {
if(isset($_FILES['img'])) {
    $extensao = strtolower(substr($_FILES['img']['name'], -4));
    $nome_img = md5(time() . $extensao);
    $diretorio = 'img/produtos/';

    $imagem = move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$nome_img);

}
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastrar Produto</title>
</head>

<body>
    <main>
        <div class="card col-md-6" style=" padding:30px; margin-top: 30px; margin-left: 350px;">
            <h1 style="text-align: center;">Cadastrar Produto</h1>
            <form action="../controller/cadProduto.php" method="post" class="row g-3" enctype="multipart/form-data">
                <div id="form-cadastro-categoria" class="col-md-6">
                    <label for="cxCategoria" class="form-label">Categoria:</label>
                    <select required type="text" class="form-control" name="categoria" id="cxCategoria">
                        <option disabled selected>Selecione...</option>
                        <option value="1">Moda</option>
                        <option value="2">Tecnologia</option>
                        <option value="3">Eletrodomésticos</option>
                        <option value="4">Construção</option>
                        <option value="5">Outros</option>
                    </select>
                </div>

                <div id="form-cadastro-marca" class="col-md-6">
                    <label for="cxMarca" class="form-label">Marca:</label>
                    <input required type="text" class="form-control" name="nomeMarca" id="cxMarca">
                </div>


                <div id="form-cadastro-produto" class="col-md-6">
                    <label for="cxProduto" class="form-label">Produto:</label>
                    <input required type="text" class="form-control" name="nomeProduto" id="cxProduto">
                </div>

                <div id="form-cadastro-preco" class="col-md-6">
                    <label for="cxPreco" class="form-label">Preço do Lote: </label>
                    <div class=" input-group" style="max-width: 400px;">
                        <span class="input-group-text"> R$</span>
                        <input required type="number" class="form-control" name="preco" id="cxPreco">
                    </div>
                </div>

                <div id="form-cadastro-QIL" class="col-md-6">
                    <label for="cxQIL" class="form-label">Quantidade de itens do lote:</label>
                    <input required type="number" class="form-control" name="QIL" id="cxQIL">
                </div>

                <div id="form-cadastro-tamanho" class="col-md-6">
                    <label for="cxTamanho" class="form-label">Tamanho dos itens:</label>
                    <input required type="text" class="form-control" name="tamanho" id="cxTamanho">
                </div>

                <div id="form-cadastro-descricao" class="col-md-6">
                    <label for="cxDescricao" class="form-label" maxlengt="280">Descrição:</label>
                    <input placeholder="Digite aqui..." type="text" class="form-control" style="height: 150px;" name="descricao" id="cxDescricao">
                </div>


                <div id="form-cadastro-disponivel" class="col-md-6">
                    <label for="cxDisponivel" class="form-label">Lotes disponiveis:</label>
                    <input required type="number" class="form-control" name="disponivel" id="cxDisponivel">
                </div>

                <div id="form-cadastro-imagem" id="form-cadastro-imagem" class="col-md-6">
                    <img src="" for="lblImagem" class="form-label">Adicionar imagem do produto:</img>
                    <input type="file" id="myFile" name="img">
                </div>

                <img src="img/produtos/<?=$nome_img?>" for="lblImagem" class="form-label">Adicionar imagem do produto:</img>

                <a href="listaprodutos.html"> <button type="submit" class="btn btn-outline-primary btn-lg" style="float: right;" method="post">Cadastrar Produto</button> </a>
            </form>

            <form action="cadastrarProduto.php" method="POST" enctype="multipart/form-data">
            <div id="form-cadastro-imagem" id="form-cadastro-imagem" class="col-md-6">
                    
                    <input type="file" id="myFile" name="img">
                </div>

                <button>Cadastrar imagem</button>
            </form>
        </div>
    </main>
</body>

</html>