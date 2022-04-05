<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <main>
        <h1>Cadastrar Usuario</h1>
        <div id="form-cadastro">
            <form action="../controller/cadastrarCli.php" method="post">
                <div id="form-cadastro-nome">
                    <label for="cxNome">Nome:</label>
                    <input required type="text" name="nome" id="cxNome">
                </div>
                
                <div id="form-cadastro-sobrenome">
                    <label for="cxSobrenome">Sobrenome:</label>
                    <input required type="text" name="sobrenome" id="cxSobrenome">
                </div>
                
                <div id="form-cadastro-data_nasc">
                    <label for="cxData_nasc">Data de Nascimento:</label>
                    <input required type="date" name="data_nasc" id="cxData_nasc">
                </div>

                <div id="form-cadastro-ddd1">
                    <label for="cxDdd1">DDD</label>
                    <input maxlength="2" required type="text" name="ddd1" id="cxDdd1">
                </div>

                <div id="form-cadastro-tel1">
                    <label for="cxTel1">Celular</label>
                    <input maxlength="10" required type="text" name="tel1" id="cxTel1">
                </div>

                <div id="form-cadastro-ddd2">
                    <Strong>Opcional</Strong>
                    <label for="cxDdd1">DDD</label>
                    <input maxlength="2" type="text" name="ddd2" id="cxDdd2">
                </div>

                <div id="form-cadastro-tel2">
                    <label for="cxTel2">Celular</label>
                    <input maxlength="10" type="text" name="tel2" id="cxTel2">
                </div>

                <div id="form-cadastro-cnpj">
                    <label for="cxCNPJ">CNPJ:</label>
                    <input maxlength="18" required type="text" name="cnpj" id="cxCNPJ">
                </div>

                <div id="form-cadastro-email">
                    <label for="cxEmail">Email</label>
                    <input required type="email" name="email" id="cxEmail">
                </div>

                <div id="form-cadastro-senha">
                    <label for="cxSenha">Senha:</label>
                    <input required type="password" name="senha" id="cxSenha">
                </div>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>