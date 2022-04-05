<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Telefone</title>
</head>
<body>
    <main>
        <h1>Cadastrar Informações Adicionais</h1>
        <h3>Telefone</h3>
        <div id="form-cadastro">
            <form action="../controller/cadastrarTel.php" method="post">
                <div id="form-cadastro-telefone">
                    <label for="cxTelefone">Telefone:</label>
                    <input required type="text" name="telefone" id="cxTelefone" maxlength="11">
                </div>

                <div id="form-cadastro-ddd">
                    <label for="cxDDD">DDD:</label>
                    <input required type="text" name="ddd" id="cxDDD" maxlength="2">
                </div>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>