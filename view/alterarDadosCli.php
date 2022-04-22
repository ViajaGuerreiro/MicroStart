<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1>Alterar dados do Cliente</h1>
            <div id="form-alterar">
                <form action="../controller/alterarDadosCli.php" method="post">
                    <div id="form-alterar-nome">
                        <label for="cxNome">Nome:</label>
                        <input required type="text" name="nome" id="cxNome" value="<?= $linha['nome_cli'] ?>">
                    </div>

                    <div id="form-alterar-sobrenome">
                        <label for="cxSobrenome">Sobrenome:</label>
                        <input required type="text" name="sobrenome" id="cxSobrenome" value="<?= $linha['sobrenome_cli'] ?>">
                    </div>

                    <div id="form-alterar-data_nasc">
                        <label for="cxData_nasc">Data de Nascimento:</label>
                        <input required type="date" name="data_nasc" id="cxData_nasc" value="<?= $linha['nascimento_cli'] ?>">
                    </div>

                    <div id="form-alterar-cnpj">
                        <label for="cxCNPJ">CNPJ:</label>
                        <input maxlength="18" required type="text" name="cnpj" id="cxCNPJ" value="<?= $linha['cnpj_cli'] ?>">
                    </div>

                    <div id="form-alterar-email">
                        <label for="cxEmail">Email</label>
                        <input required type="email" name="email" id="cxEmail" value="<?= $linha['email_cli'] ?>">
                    </div>

                    <div id="form-alterar-senha">
                        <label for="cxSenha">Senha:</label>
                        <input required type="password" name="senha" id="cxSenha">
                    </div>

                    <div id="form-alterar-plano">
                        <label for="cxPlano">Plano:</label>
                        <input readonly type="text" name="plano" id="cxPlano" value="<?= $linha['plano_atual'] ?>">
                    </div>

                    <button type="submit">Alterar dados</button>
                </form>
            </div>
        <?php
        }
        foreach ($linhasProd as $linhaProd) {

        ?>
            <h1>Alterar dados do Produto</h1>
            <div id="form-alterar">
                <form action="../controller/alterarDadosProd.php" method="post">
                    <div id="form-alterar-produto">
                        <input required type="hidden" name="idProduto" id="cxIdProduto" value="<?= $linhaProd['idProduto'] ?>">
                    </div>
                    <div id="form-alterar-produto">
                        <label for="cxProduto">Produto:</label>
                        <input required type="text" name="nomeProduto" id="cxProduto" value="<?= $linhaProd['Nome do Produto'] ?>">
                    </div>

                    <div id="form-alterar-precolote">
                        <label for="cxPrecoLote">Preço do Lote:</label>
                        <input required type="text" name="precoLote" id="cxPrecoLote" value="<?= $linhaProd['Preco'] ?>">
                    </div>

                    <div id="form-alterar-qil">
                        <label for="cxQil">Quantidade de itens no lote:</label>
                        <input required type="text" name="Qil" id="cxQil" value="<?= $linhaProd['Quantidade'] ?>">
                    </div>

                    <div id="form-alterar-tamanho">
                        <label for="cxTamanho">Tamanho do Item:</label>
                        <input required type="text" name="tamanho" id="cxTamanho" value="<?= $linhaProd['Tamanho'] ?>">
                    </div>

                    <div id="form-alterar-lotesDisponiveis">
                        <label for="cxLotesDisponiveis">Lotes Disponíveis:</label>
                        <input required type="text" name="lotesDisponiveis" id="cxLotesDisponiveis" value="<?= $linhaProd['Disponivel'] ?>">
                    </div>

                    <div id="form-alterar-descricao ">
                        <label for="cxDescricao">Descrição</label>
                        <input required type="text" name="descricao" id="cxDescricao" value="<?= $linhaProd['Descricao'] ?>">
                    </div>

                    <button type="submit">Alterar Produto</button>
                </form>
            </div>
    </main>
</body>

</html>
<?php
        }
