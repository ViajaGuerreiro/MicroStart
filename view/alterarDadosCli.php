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
    include_once '../model/ClienteDao.php';

    $clienteDao = new ClienteDao();
    $linhas = $clienteDao->read($_SESSION['id']);
    foreach($linhas as $linha) {

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

                <button type="submit">Alterar dados</button>
            </form>
        </div>
    </main>
</body>
</html>
<?php
    }