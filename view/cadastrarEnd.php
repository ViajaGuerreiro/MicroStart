<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Endereço</title>
</head>
<body>
    <main>
        <h1>Cadastrar Informações Adicionais</h1>
        <h3>Endereço</h3>
        <div id="form-cadastro">
            <form action="../controller/cadastrarEnd.php" method="post">
                <div id="form-cadastro-rua">
                    <label for="cxRua">Rua:</label>
                    <input required type="text" name="rua" id="cxRua">
                </div>

                <div id="form-cadastro-cidade">
                    <label for="cxCidade">Cidade:</label>
                    <input required type="text" name="cidade" id="cxCidade">
                </div>

                <div id="form-cadastro-UF">
                    <label for="cxUF">UF:</label>
                    <input required type="text" name="uf" id="cxUF">
                </div>

                <div id="form-cadastro-pais">
                    <label for="cxPais">País:</label>
                    <input required type="text" name="pais" id="cxPais">
                </div>

                <div id="form-cadastro-bairro">
                    <label for="cxBairro">Bairro:</label>
                    <input required type="text" name="bairro" id="cxBairro">
                </div>

                <div id="form-cadastro-cep">
                    <label for="cxCep">CEP:</label>
                    <input required type="text" name="cep" id="cxCep">
                </div>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>