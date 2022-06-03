<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/styledados.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>alterar dados do cliente</title>
</head>

<body>

    <main>
        <?php
        session_start();
        include_once '../controller/verificaLogin.php';
        require_once '../model/ClienteDao.php';
        require_once '../model/ProdutoDao.php';

        $clienteDao = new ClienteDao();
        $produtoDao = new ProdutoDao();
        $linhas = $clienteDao->read($_SESSION['id']);
        $linhasProd = $produtoDao->read_prod_id($_SESSION['id']);


        foreach ($linhas as $linha) {

        ?>
            <!-- ALTERAR DADOS CLIENTE -->
            <h1 class="alterar">Alterar dados do Cliente</h1>
            <div id="form-alterar">
                <form action="../controller/alterarDadosCli.php" method="post" class="row g-3" id="dados">
                    <div id="form-alterar-nome" class="col-md-6">
                        <label for="cxNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="cxNome" value="<?= $linha['nome_cli'] ?>">
                    </div>
                    <div id="form-alterar-sobrenome" class="col-md-6">
                        <label class="form-label" for="cxSobrenome">Sobrenome:</label>
                        <input class="form-control" type="text" name="sobrenome" id="cxSobrenome" value="<?= $linha['sobrenome_cli'] ?>">
                    </div>
                    <div class="col-3" id="form-alterar-data_nasc">
                        <label class="form-label" for="cxData_nasc">Data de Nascimento:</label>
                        <input class="form-control" type="date" name="data_nasc" id="cxData_nasc" value="<?= $linha['nascimento_cli'] ?>">
                    </div>
                    <div class="col-3" id="form-alterar-cnpj">
                        <label class="form-label" for="cxCNPJ">CNPJ:</label>
                        <input class="form-control" maxlength="18" type="text" name="cnpj" id="cxCNPJ" value="<?= $linha['cnpj_cli'] ?>">
                    </div>
                    <div class="col-md-6" id="form-alterar-email">
                        <label class="form-label" for="cxEmail">Email</label>
                        <input class="form-control" type="email" name="email" id="cxEmail" value="<?= $linha['email_cli'] ?>">
                    </div>
                    <div class="col-md-4" id="form-alterar-senha">
                        <label class="form-label" for="cxSenha">Senha:</label>
                        <input class="form-control" type="password" name="senha" id="cxSenha">

                    </div>
                    <div class="col-md-4" id="form-alterar-plano">
                        <label class="form-label" for="cxPlano">Plano:</label>
                        <input class="form-control" type="text" name="plano" id="cxPlano" value="<?= $linha['plano_atual'] ?>">
                    </div>

                    <div class="col-12">
                        <button id="btnAlterar" type="submit" class="btn"> Alterar dados</button>
                    </div>

                </form>
                <!-- ALTERAR DADOS CLIENTE -->

                <!-- ALTERAR DADOS PRODUTO -->

                <h1 class="alterar">Alterar dados do Produto</h1>
                <!-- CADASTRAR PRODUTO -->

                <div class="col-12">
                    <button id="btn-cad" type="submit" class="btn">Cadastrar</button>
                </div>
                <div id="cont" style="display:none; margin-left:300px; padding:15px;" class="card col-md-6" style=" padding:30px; margin-top: 30px; margin-left: 350px;">
                    <h1 style="text-align: center;">Cadastrar Produto</h1>
                    <form action="../controller/cadProduto.php" method="post" class="row g-3">
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
                            <input required type="text" class="form-control" name="nomeProduto" minlength="5" maxlength="15"id="cxProduto">
                        </div>

                        <div id="form-cadastro-preco" class="col-md-6">
                            <label for="cxPreco" class="form-label">Preço do Lote: </label>
                            <div class=" input-group" style="max-width: 400px;">
                                <span class="input-group-text"> R$</span>
                                <input required type="number" step="0.01" name="preco" min="0.01" class="form-control" id="cxPreco">
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
                            <label for="cxDescricao" class="form-label">Descrição:</label>
                            <input placeholder="Digite aqui..." type="text" class="form-control" style="height: 150px;" name="descricao" minlength="5" maxlength="20" id="cxDescricao"> 
                        </div>


                        <div id="form-cadastro-disponivel" class="col-md-6">
                            <label for="cxDisponivel" class="form-label">Lotes disponiveis:</label>
                            <input required type="number" class="form-control" name="disponivel" id="cxDisponivel">
                        </div>
                        <div id="form-cadastro-imagem" class="col-md-6">
                            <label for="lblImagem" class="form-label">Adicionar imagem do produto:</label>
                            <input id="img-input" type="file" name="imagem" title="Usar arquivo com dimensões 300x300">
                        </div>
                        <div id="img-container">
                            <img id="preview" src="" style="justify-content:center;">
                        </div>

                        <a href="listaprodutos.html"> <button type="submit" class="btn btn-outline-primary btn-lg" style="float: right;" method="post">Cadastrar Produto</button> </a>
                    </form>
                </div>


                <!-- CADASTRAR PRODUTO -->


            <?php
        }
        foreach ($linhasProd as $linhaProd) {

            ?>
                <div id="form-alterar">
                    <table class="records">
                        <thead>
                            <tr>
                                <th>Nome do Produto</th>
                                <th> Valor produto</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $linhaProd['Nome do Produto'] ?></td>
                                <td><?= $linhaProd['Preco'] ?></td>
                                <td id="crud">
                                    <button id="btn-div" type="submit" class="btn">visualizar</button>
                                   <a href="../controller/deletarDadosProd.php?idProduto=<?php echo $linhaProd['idProduto'];?>"> <button id="btnAlterar"  type="submit" class="btn"> Excluir</button></a>
                                   
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div id="container" class="container" style="display: none;">
                    <form action="../controller/alterarDadosProd.php" method="post" class="row g-3" id="dados">
                        <div id="form-cadastro-marca" class="col-md-6">
                            <label for="cxMarca" class="form-label">Marca:</label>
                            <input type="text" class="form-control" name="nomeMarca" id="cxMarca">
                        </div>


                        <div id="form-cadastro-produto" class="col-md-6">
                            <label for="cxProduto" class="form-label">Produto:</label>
                            <input type="text" class="form-control" name="nomeProduto" id="cxProduto" value="<?= $linhaProd['Nome do Produto'] ?>">
                        </div>

                        <div id="form-cadastro-preco" class="col-md-6">
                            <label for="cxPreco" class="form-label">Preço do Lote: </label>
                            <div class=" input-group" style="max-width: 400px;">
                                <span class="input-group-text"> R$</span>
                                <input type="number" step="0.01" name="preco" min="0.01" class="form-control" id="cxPreco" value="<?= $linhaProd['Preco'] ?>">
                            </div>
                        </div>


                        <div id="form-cadastro-QIL" class="col-md-6">
                            <label for="cxQIL" class="form-label">Quantidade de itens do lote:</label>
                            <input type="number" class="form-control" name="QIL" id="cxQIL" value="<?= $linhaProd['Quantidade'] ?>">
                        </div>

                        <div id="form-cadastro-tamanho" class="col-md-6">
                            <label for="cxTamanho" class="form-label">Tamanho dos itens:</label>
                            <input type="text" class="form-control" name="tamanho" id="cxTamanho" value="<?= $linhaProd['Tamanho'] ?>">
                        </div>

                        <div id="form-cadastro-descricao" class="col-md-6">
                            <label for="cxDescricao" class="form-label" minlength="5" maxlength="20">Descrição:</label>
                            <input placeholder="Digite aqui..." type="text" class="form-control" style="height: 150px;" name="descricao" id="cxDescricao" value="<?= $linhaProd['Descricao'] ?>">
                        </div>


                        <div id="form-cadastro-disponivel" class="col-md-6">
                            <label for="cxDisponivel" class="form-label">Lotes disponiveis:</label>
                            <input type="number" class="form-control" name="disponivel" id="cxDisponivel" value="<?= $linhaProd['Disponivel'] ?>">
                        </div>
                        <div id="form-cadastro-imagem" class="col-md-6">
                            <label for="lblImagem" class="form-label">Adicionar imagem do produto:</label>
                            <input id="img-input" type="file" name="imagem" title="Usar arquivo com dimensões 300x300">
                        </div>
                        <div id="img-container">
                            <img id="preview" src="" style="justify-content:center;">
                        </div>
                        <div class="col-12">
                            <button id="btnAlterar" type="submit" class="btn"> Alterar dados</button>
                        </div>
                    </form>

    </main>
<?php
        }
?>

<!-- JS DIV CADASTRAR -->

<script>
    var btn = document.getElementById('btn-cad');
    var container = document.querySelector('.cont');
    btn.addEventListener('click', function() {

        if (cont.style.display === 'block') {
            cont.style.display = 'none';
        } else {
            cont.style.display = 'block';
        }
    });
</script>
<!-- JS DIV CADASTRAR -->

<!-- JS IMAGEM -->
<script>
    function readImage() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function(e) {
                document.getElementById("preview").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    }

    document.getElementById("img-input").addEventListener("change", readImage, false);
</script>
<!-- JS IMAGEM -->

<!-- JS ESCONDER DIV ALTERAR-->
<script>
    var btn = document.getElementById('btn-div');
    var container = document.querySelector('.container');
    btn.addEventListener('click', function() {

        if (container.style.display === 'block') {
            container.style.display = 'none';
        } else {
            container.style.display = 'block';
        }
    });
</script>
<!-- JS ESCONDER ALTERAR-->

</body>

</html>